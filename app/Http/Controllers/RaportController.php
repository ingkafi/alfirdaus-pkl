<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RaportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function raportparent()
    {
        $student = DB::table('students')->where('nis',auth()->user()->nis)->first();
        $raport = DB::table('raports')->where('nis',auth()->user()->nis)->first();
        return view('/parent/raport', ['student' => $student, 'raport'=>$raport]);
    }
    public function kelolaraport()
    {
        $students = DB::table('students')->orderBy('grade')->orderBy('nama')->get();
        $raports = DB::table('raports')->get();
        return view('/hrt/aplikasi/raport/index', ['students' => $students, 'raport'=>$raports]);
    }
    public function kelolaraporthrt()
    {
        $students = DB::table('students')->where('grade', auth()->user()->grade)->orderBy('grade')->orderBy('nama')->get();
        $raports = DB::table('raports')->get();
        return view('/hrt/aplikasi/raport/index', ['students' => $students, 'raport'=>$raports]);
    }
    public function updateraport(Request $request)
    {
        $raport = DB::table('raports')->where('nis',$request->route('raport'))->first();
        return view('/hrt/aplikasi/raport/upload', ['raport'=>$raport]);
    }
    public function storeraport(Request $request, Raport $raport, Student $student)
    {
        $student = DB::table('students')->where('nis', $raport->nis)->first();
        $request->validate([
            'raport_7_1' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_7_2' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_8_1' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_8_2' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_9_1' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_9_2' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_10_1' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_10_2' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_11_1' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_11_2' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_12_1' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'raport_12_2' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
        ]);
        if ($request->file('raport_7_1')) {
            $raport_7_1=$request->file('raport_7_1');
            $filename = $student->nama.'_7_1'.'.'.$raport_7_1->getClientOriginalExtension();
            $raport_7_1->move(public_path() . '/uploads/raport/GRADE 7', $filename);
            $raport->raport_7_1=$filename;
            $raport->save();

        }
        if ($request->file('raport_7_2')) {
            $raport_7_2=$request->file('raport_7_2');
            $filename = $student->nama.'_7_2'.'.'.$raport_7_2->getClientOriginalExtension();
            $raport_7_2->move(public_path() . '/uploads/raport/GRADE 7', $filename);
            $raport->raport_7_2=$filename;
            $raport->save();

        }
        if ($request->file('raport_8_1')) {
            $raport_8_1=$request->file('raport_8_1');
            $filename = $student->nama.'_8_1'.'.'.$raport_8_1->getClientOriginalExtension();
            $raport_8_1->move(public_path() . '/uploads/raport/GRADE 8', $filename);
            $raport->raport_8_1=$filename;
            $raport->save();

        }
        if ($request->file('raport_8_2')) {
            $raport_8_2=$request->file('raport_8_2');
            $filename = $student->nama.'_8_2'.'.'.$raport_8_2->getClientOriginalExtension();
            $raport_8_2->move(public_path() . '/uploads/raport/GRADE 8', $filename);
            $raport->raport_8_2=$filename;
            $raport->save();

        }
        if ($request->file('raport_9_1')) {
            $raport_9_1=$request->file('raport_9_1');
            $filename = $student->nama.'_9_1'.'.'.$raport_9_1->getClientOriginalExtension();
            $raport_9_1->move(public_path() . '/uploads/raport/GRADE 9', $filename);
            $raport->raport_9_1=$filename;
            $raport->save();

        }
        if ($request->file('raport_9_2')) {
            $raport_9_2=$request->file('raport_9_2');
            $filename = $student->nama.'_9_2'.'.'.$raport_9_2->getClientOriginalExtension();
            $raport_9_2->move(public_path() . '/uploads/raport/GRADE 9', $filename);
            $raport->raport_9_2=$filename;
            $raport->save();

        }
        if ($request->file('raport_10_1')) {
            $raport_10_1=$request->file('raport_10_1');
            $filename = $student->nama.'_10_1'.'.'.$raport_10_1->getClientOriginalExtension();
            $raport_10_1->move(public_path() . '/uploads/raport/GRADE 10', $filename);
            $raport->raport_10_1=$filename;
            $raport->save();

        }
        if ($request->file('raport_10_2')) {
            $raport_10_2=$request->file('raport_10_2');
            $filename = $student->nama.'_10_2'.'.'.$raport_10_2->getClientOriginalExtension();
            $raport_10_2->move(public_path() . '/uploads/raport/GRADE 10', $filename);
            $raport->raport_10_2=$filename;
            $raport->save();

        }
        if ($request->file('raport_11_1')) {
            $raport_11_1=$request->file('raport_11_1');
            $filename = $student->nama.'_11_1'.'.'.$raport_11_1->getClientOriginalExtension();
            $raport_11_1->move(public_path() . '/uploads/raport/GRADE 11', $filename);
            $raport->raport_11_1=$filename;
            $raport->save();

        }
        if ($request->file('raport_11_2')) {
            $raport_11_2=$request->file('raport_11_2');
            $filename = $student->nama.'_11_2'.'.'.$raport_11_2->getClientOriginalExtension();
            $raport_11_2->move(public_path() . '/uploads/raport/GRADE 11', $filename);
            $raport->raport_11_2=$filename;
            $raport->save();

        }
        if ($request->file('raport_12_1')) {
            $raport_12_1=$request->file('raport_12_1');
            $filename = $student->nama.'_12_1'.'.'.$raport_12_1->getClientOriginalExtension();
            $raport_12_1->move(public_path() . '/uploads/raport/GRADE 12', $filename);
            $raport->raport_12_1=$filename;
            $raport->save();

        }
        if ($request->file('raport_12_2')) {
            $raport_12_2=$request->file('raport_12_2');
            $filename = $student->nama.'_12_2'.'.'.$raport_12_2->getClientOriginalExtension();
            $raport_12_2->move(public_path() . '/uploads/raport/GRADE 12', $filename);
            $raport->raport_12_2=$filename;
            $raport->save();

        }
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('success', 'Upload Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('success', 'Upload Raport Berhasil!');
   
    }
    public function deleteraport(Request $request)
    {
        $raport = Raport::where('id', $request->route('raport'))->first();
        $raport->update([
            'raport_7_1' => null,
            'raport_7_2' => null,
            'raport_8_1' => null,
            'raport_8_2' => null,
            'raport_9_1' => null,
            'raport_9_2' => null,
            'raport_10_1' => null,
            'raport_10_2' => null,
            'raport_11_1' => null,
            'raport_11_2' => null,
            'raport_12_1' => null,
            'raport_12_2' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport71(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_7_1' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport72(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_7_2' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport81(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_8_1' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport82(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_8_2' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport91(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_9_1' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport92(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_9_2' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport101(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_10_1' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport102(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_10_2' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport111(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_11_1' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport112(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_11_2' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport121(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_12_1' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
    public function raport122(Raport $raport)
    {
        $raport = Raport::where('id', $raport->id)->first();
        $raport->update([
            'raport_12_2' => null,
            ]);         
        if (auth()->user()->role == 'hrt')           
        return redirect()->route('kelolaraporthrt')->with('info', 'Hapus Raport Berhasil!');
        else
        return redirect()->route('kelolaraport')->with('info', 'Hapus Raport Berhasil!');
    }
}