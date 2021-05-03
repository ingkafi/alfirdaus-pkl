<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function kelola()
    {
        return view('kelola/index');
    }
    public function dashhrt()
    {
        $grade = DB::table('grades')->first();
        $posts = DB::table('posts')->get()->sortBy('id');
        $students = DB::table('students')->whereMonth('tgl_lahir', Carbon::now()->month)->get()->sortBy('tgl_lahir');
        return view('/hrt/dashboard', ['posts' => $posts, 'students'=>$students, 'grade'=>$grade]);
    }
    public function homeparent()
    {
        $student = DB::table('students')->where('nis', auth()->user()->nis)->first();
        return view('/parent/home', ['student'=>$student]);
    }
    public function dashadmin()
    {
        $students = DB::table('students')->whereMonth('tgl_lahir', Carbon::now()->month)->get()->sortBy('tgl_lahir');
        $posts = DB::table('posts')->get()->sortBy('id');
        $jpost = DB::table('posts')->count();
        $jstudent = DB::table('students')->count();
        $juser = DB::table('users')->where('role', 'admin')->orWhere('role', 'hrt')->count();
        $jparent = DB::table('users')->where('role', 'parent')->count();
        $raport = DB::table('raports')->get();
        $jraport = 
        $raport->whereNotNull('raport_7_1')->count()+
        $raport->whereNotNull('raport_7_2')->count()+
        $raport->whereNotNull('raport_8_1')->count()+
        $raport->whereNotNull('raport_8_2')->count()+
        $raport->whereNotNull('raport_9_1')->count()+
        $raport->whereNotNull('raport_9_2')->count()+
        $raport->whereNotNull('raport_10_1')->count()+
        $raport->whereNotNull('raport_10_2')->count()+
        $raport->whereNotNull('raport_11_1')->count()+
        $raport->whereNotNull('raport_11_2')->count()+
        $raport->whereNotNull('raport_12_1')->count()+
        $raport->whereNotNull('raport_12_2')->count()
        ;
            return view('/admin/dashboard', ['students'=>$students, 'posts' => $posts, 'jpost'=> $jpost, 'jstudent'=> $jstudent, 'juser'=> $juser, 'jraport'=>$jraport, 'jparent' =>$jparent]);
    }
}
