<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GradeController extends Controller
{
    public function kelolagrade()
    {
        $j7 = DB::table('students')->where('grade','7')->count();
        $j8 = DB::table('students')->where('grade','8')->count();
        $j9 = DB::table('students')->where('grade','9')->count();
        $j10 = DB::table('students')->where('grade','10')->count();
        $j11 = DB::table('students')->where('grade','11')->count();
        $j12 = DB::table('students')->where('grade','12')->count();
        $grade = DB::table('grades')->first();
        return view('/kelola/grade/index', ['j7'=>$j7,'j8'=>$j8,'j9'=>$j9,'j10'=>$j10,'j11'=>$j11,'j12'=>$j12, 'grade' => $grade]);
    }
    public function updategrade()
    {
        $grade = DB::table('grades')->first();
        return view('/kelola/grade/upload', ['grade'=>$grade]);
    }
    public function storegrade(Request $request, Grade $grade)
    {
        $request->validate([
            'grade7' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'grade8' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'grade9' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'grade10' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'grade11' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
            'grade12' => 'mimes:pdf,xps,xlx,csv,xlsx,xls,doc,docx',
        ]);
        if ($request->file('grade7')) {
            $grade7=$request->file('grade7');
            $filename = 'GRADE_7'.'.'.$grade7->getClientOriginalExtension();
            $grade7->move(public_path() . '/uploads/grade/', $filename);
            $grade->grade7=$filename;
            $grade->save();

        }
        if ($request->file('grade8')) {
            $grade8=$request->file('grade8');
            $filename = 'GRADE_8'.'.'.$grade8->getClientOriginalExtension();
            $grade8->move(public_path() . '/uploads/grade/', $filename);
            $grade->grade8=$filename;
            $grade->save();

        }
        if ($request->file('grade9')) {
            $grade9=$request->file('grade9');
            $filename = 'GRADE_9'.'.'.$grade9->getClientOriginalExtension();
            $grade9->move(public_path() . '/uploads/grade/', $filename);
            $grade->grade9=$filename;
            $grade->save();

        }
        if ($request->file('grade10')) {
            $grade10=$request->file('grade10');
            $filename = 'GRADE_10'.'.'.$grade10->getClientOriginalExtension();
            $grade10->move(public_path() . '/uploads/grade/', $filename);
            $grade->grade10=$filename;
            $grade->save();

        }
        if ($request->file('grade11')) {
            $grade11=$request->file('grade11');
            $filename = 'GRADE_11'.'.'.$grade11->getClientOriginalExtension();
            $grade11->move(public_path() . '/uploads/grade/', $filename);
            $grade->grade11=$filename;
            $grade->save();

        }
        if ($request->file('grade12')) {
            $grade12=$request->file('grade12');
            $filename = 'GRADE_12'.'.'.$grade12->getClientOriginalExtension();
            $grade12->move(public_path() . '/uploads/grade/', $filename);
            $grade->grade12=$filename;
            $grade->save();

        }
        return  redirect()->route('kelolagrade')->with('success', 'Tambah Data Grade Berhasil!');
   
    }
    
}
