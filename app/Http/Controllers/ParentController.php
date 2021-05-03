<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function kelolaparent(Request $request)
    {
        $search = $request->input('search');
        $users = User::query()->where('users.role','parent')->join('students', 'users.nis', '=', 'students.nis')->where('users.name', 'LIKE', "%{$search}%")->orderByRaw('CHAR_LENGTH(students.grade)')->orderBy('students.grade')->orderBy('users.name')->get();
        $jumlah = count($users);
        return view('/kelola/parent/index', [ 'users'=>$users,'search'=> $search, 'jumlah' => $jumlah]);
    }
    public function kelolaparenthrt(Request $request)
    {
        $search = $request->input('search');
        $users = User::query()->where('users.role','parent')->where('users.grade', auth()->user()->grade)->join('students', 'users.nis', '=', 'students.nis')->where('students.nama', 'LIKE', "%{$search}%")->orderBy('users.name')->get();
        $jumlah = count($users);
        return view('/kelola/parent/index', [ 'users'=>$users,'search'=> $search, 'jumlah' => $jumlah]);

     
    }
}
