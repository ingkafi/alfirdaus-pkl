<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\User;
use App\Models\Student;
use App\Models\Presensi;
use App\Models\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function kelolasiswa(Request $request)
    {
        $search = $request->input('search');
        $students = Student::query()->where('nama', 'LIKE', "%{$search}%")->orderByRaw('CHAR_LENGTH(grade)')->orderBy('grade')->orderBy('nama')->get();
        $jumlah = count($students);
        return view('/kelola/siswa/index', ['students' => $students, 'search' => $search, 'jumlah' => $jumlah]);
    }
    public function kelolasiswahrt(Request $request)
    {
        $search = $request->input('search');
        $students = Student::query()->where('grade', auth()->user()->grade)->where('nama', 'LIKE', "%{$search}%")->orderBy('nama')->get();
        $jumlah = count($students);
        return view('/kelola/siswa/index', ['students' => $students, 'search' => $search, 'jumlah' => $jumlah]);
    }
    // public function kelolasiswahrt()
    // {
    //     $students = DB::table('students')->where('grade', auth()->user()->grade)->orderBy('nama')->get();
    //     return view('/kelola/siswa/index', ['students' => $students]);
    // }

    public function updatesiswa(Request $request)
    {
        $student = DB::table('students')->where('nis', $request->route('student'))->first();
        return view('/kelola/siswa/edit', ['student' => $student]);
    }
    public function storesiswa(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:students,nis,' . $student->id,
            'grade' => 'required',
            'j_kel' => 'required',
            'tgl_lahir' => 'required',
            'foto_siswa.*' => 'required|mimes:jpeg,jpg,png,PNG|max:150'
        ]);

        if ($request->hasfile('foto_siswa')) {
            foreach ($request->file('foto_siswa') as $file) {
                $name =  strtoupper($request->nama) . '.jpg';
                $file->move(public_path() . '/uploads/foto_siswa/', $name);
                $imgData[] = $name;
            }
            $student->foto_siswa = json_encode($imgData);
            $student->save();
        }
        Student::where('id', $student->id)
            ->update([
                'nama'       =>   strtoupper($request->nama),
                'nis'       =>   $request->nis,
                'grade'       =>   $request->grade,
                'j_kel'       =>   $request->j_kel,
                'tgl_lahir'        =>   $request->tgl_lahir,
            ]);
        Portofolio::where('nis', $student->nis)
            ->update([
                'nis'       =>   $request->nis,
            ]);
        Raport::where('nis', $student->nis)
            ->update([
                'nis' => $request->nis,
            ]);
        Presensi::where('nis', $student->nis)
            ->update([
                'nama'       =>   strtoupper($request->nama),
                'nis' => $request->nis,
                'grade'       =>   $request->grade,
                'j_kel'       =>   $request->j_kel,
            ]);

        User::where('nis', $student->nis)
            ->update([
                'name'       =>   strtoupper($request->nama),
                'nis'       =>   $request->nis,
                'grade'       =>   $request->grade,
                'email' => $request->nis . '@alfirdaus.com',
                'password' => Hash::make($request->tgl_lahir),
            ]);

        Student::where('id', $student->id)
            ->update([
                'nama'       =>   strtoupper($request->nama),
                'nis'       =>   $request->nis,
                'grade'       =>   $request->grade,
                'j_kel'       =>   $request->j_kel,
                'tgl_lahir'        =>   $request->tgl_lahir,
            ]);
        if (auth()->user()->role == 'hrt')
            return redirect()->route('kelolasiswahrt')->with('success', 'Edit Data Siswa Berhasil!');
        else
            return redirect()->route('kelolasiswa')->with('success', 'Edit Data Siswa Berhasil!');
    }

    public function deletesiswa(Student $student)
    {
        Portofolio::where('nis', $student->nis)->delete();
        Presensi::where('nis', $student->nis)->delete();
        Student::where('id', $student->id)->first()->delete();
        Raport::where('nis', $student->nis)->first()->delete();
        User::where('nis', $student->nis)->first()->delete();




        if (auth()->user()->role == 'hrt')
            return redirect()->route('kelolasiswahrt')->with('info', 'Hapus Data Siswa Berhasil!');
        else
            return redirect()->route('kelolasiswa')->with('info', 'Hapus Data Siswa Berhasil!');
    }
    public function formsiswa()
    {
        return view('/kelola/siswa/create');
    }


    public function createsiswa(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:students,nis',
            'grade' => 'required',
            'j_kel' => 'required',
            'tgl_lahir' => 'required',
            'foto_siswa.*' => 'required|mimes:jpeg,jpg,png,PNG|max:150'
        ]);
        if ($request->hasfile('foto_siswa')) {
            foreach ($request->file('foto_siswa') as $file) {
                $name =  strtoupper($request->nama) . '.jpg';
                $file->move(public_path() . '/uploads/foto_siswa/', $name);
                $imgData[] = $name;
            }
            $request->foto_siswa = json_encode($imgData);
        }
        $form_data = array(
            'nama'       =>   strtoupper($request->nama),
            'nis'       =>   $request->nis,
            'grade'       =>   $request->grade,
            'j_kel'       =>   $request->j_kel,
            'tgl_lahir'        =>   $request->tgl_lahir,
            'foto_siswa'            =>   $request->foto_siswa
        );
        $form_raport = array(
            'nis' => $request->nis,
        );
        $form_parent = array(
            'name' => strtoupper($request->nama),
            'email' => $request->nis . '@alfirdaus.com',
            'password' => Hash::make($request->tgl_lahir),
            'role' => 'parent',
            'nis' => $request->nis,
            'grade' => $request->grade,
        );
        Student::create($form_data);
        for ($i = 1; $i < 13; $i++) {
            $form_presensi = array(
                'nama' => strtoupper($request->nama),
                'nis' => $request->nis,
                'j_kel'       =>   $request->j_kel,
                'grade' => $request->grade,
                'bulan' => $i,
            );
            Presensi::create($form_presensi);
        }
        Raport::create($form_raport);
        User::create($form_parent);

        if (auth()->user()->role == 'hrt')
            return redirect()->route('kelolasiswahrt')->with('success', 'Tambah Data Siswa Berhasil!');
        else
            return redirect()->route('kelolasiswa')->with('success', 'Tambah Data Siswa Berhasil!');
    }
}
