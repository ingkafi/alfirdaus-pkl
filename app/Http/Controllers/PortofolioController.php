<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Portofolio;
use App\Models\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PortofolioController extends Controller
{
    public function kelolaportohrt()
    {
        $students = DB::table('students')->where('grade', auth()->user()->grade)->get()->sortBy('nama');
        return view('/hrt/aplikasi/portofolio/index', ['students' => $students]);
    }
    public function detailporto(Request $request)
    {
        $student = DB::table('students')->where('nis', $request->route('nis'))->first();
        $portofolio = DB::table('portofolio')->where('nis', $request->route('nis'))->orderByRaw('CHAR_LENGTH(grade)')->orderBy('grade')->orderBy('created_at')->get();
        return view('/hrt/aplikasi/portofolio/detail', ['portofolio' => $portofolio, 'student' => $student]);
    }
    public function detailportograde(Request $request)
    {
        $student = DB::table('students')->where('nis', $request->route('nis'))->first();
        $portofolio = DB::table('portofolio')->where('nis', $request->route('nis'))->where('grade', $request->route('grade'))->get()->sortBy('created_at');
        return view('/hrt/aplikasi/portofolio/detail', ['portofolio' => $portofolio, 'student' => $student]);
    }
    public function parentporto()
    {
        $student = DB::table('students')->where('nis', auth()->user()->nis)->first();
        $portofolio = DB::table('portofolio')->where('nis', auth()->user()->nis)->orderByRaw('CHAR_LENGTH(grade)')->orderBy('grade')->orderBy('created_at')->get();
        return view('/parent/portofolio', ['portofolio' => $portofolio, 'student' => $student]);
    }
    public function parentportograde(Request $request)
    {
        $student = DB::table('students')->where('nis', auth()->user()->nis)->first();
        $portofolio = DB::table('portofolio')->where('nis', auth()->user()->nis)->where('grade', $request->route('grade'))->get()->sortBy('created_at');
        return view('/parent/portofolio', ['portofolio' => $portofolio, 'student' => $student]);
    }
    public function uploadporto(Request $request)
    {
        $student = DB::table('students')->where('nis', $request->route('nis'))->first();
        return view('/hrt/aplikasi/portofolio/upload', ['student' => $student]);
    }
    public function storeporto(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'grade' => 'required',
            'file' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
        ]);
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = $request->nis . '-' . $request->kategori . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/uploads/portofolio/', $filename);
            $form_porto = array(
                'nis' => $request->nis,
                'judul' => $request->judul,
                'grade' => $request->grade,
                'file' => $filename,
                'kategori' => $request->kategori,
            );
            Portofolio::create($form_porto);
        }

        return redirect()->route('detailportograde', ['nis' => $request->nis, 'grade' => $request->grade])->with('success', 'Upload Portofolio Berhasil!');
    }
    public function formeditporto(Request $request)
    {
        $port = DB::table('portofolio')->where('id', $request->route('id'))->first();
        $student = DB::table('students')->where('nis', $port->nis)->first();
        return view('/hrt/aplikasi/portofolio/edit', ['port' => $port, 'student' => $student]);
    }
    public function editporto(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'grade' => 'required',
            'kategori' => 'required',
            'file' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
        ]);
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = $request->nis . '-' . $request->kategori . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/uploads/portofolio/', $filename);
            Portofolio::where('id', $request->route('id'))
                ->update([
                    'file' => $filename,
                ]);
        }
        Portofolio::where('id', $request->route('id'))
            ->update([
                'nis' => $request->nis,
                'judul' => $request->judul,
                'grade' => $request->grade,
                'kategori' => $request->kategori,
            ]);
        return redirect()->route('detailportograde', ['nis' => $request->nis, 'grade' => $request->grade])->with('success', 'Edit Portofolio Berhasil!');
    }
    public function deleteporto(Request $request)
    {
        $portofolio = Portofolio::where('id', $request->route('portofolio'))->first();
        $nis = $portofolio->nis;
        $grade = $portofolio->grade;
        $portofolio->delete();
        return redirect()->route('detailportograde', ['nis' => $nis, 'grade' => $grade])->with('info', 'Hapus Portofolio Berhasil!');
    }
}
