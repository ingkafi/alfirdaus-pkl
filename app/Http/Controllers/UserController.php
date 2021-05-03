<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function kelolauser()
    {
        $users = DB::table('users')->where('role', 'admin')->orWhere('role', 'hrt')->get()->sortBy('grade');
        return view('/admin/kelola/user/index', ['users' => $users]);
    }

    public function updateuser(User $user)
    {
        $user = DB::table('users')->where('id', $user->id)->first();
        $users = DB::table('users')->get();
        return view('/admin/kelola/user/edit', ['users' => $users, 'user' => $user]);
    }
    public function storeuser(Request $request, User $user)
    {
        User::where('id', $user->id)
            ->update([
                'name'       =>   strtoupper($request->name),
                'email'       =>   $request->email,
                'grade'       =>   $request->grade,
                'role'       =>   $request->role,
            ]);
        return redirect()->route('kelolauser')->with('success', 'Edit Data User Berhasil!');
    }

    public function deleteuser(Request $request)
    {
        $userid = User::where('id', $request->route('user'));
        $userid->delete();
        return redirect()->route('kelolauser')->with('info', 'Hapus Data User Berhasil!');
    }
    public function resetuser(Request $request)
    {

        $userid = User::where('id', $request->route('user'));
        $userid
            ->update([
                'password' => Hash::make('alfirdaus'),
            ]);
        return redirect()->route('kelolauser')->with('info', 'Reset Password User Berhasil!');
    }
    public function formuser()
    {
        return view('/admin/kelola/user/create');
    }
    public function createuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
        $form_data = array(
            'name'       =>   strtoupper($request->name),
            'email'       =>   $request->email,
            'role'       =>   $request->role,
            'grade'       =>   $request->grade,
            'password'       =>   Hash::make('alfirdaus'),
        );
        User::create($form_data);

        return redirect()->route('kelolauser')->with('success', 'Tambah Data User Berhasil!');
    }
    public function changepass()
    {

        return view('/auth/change-password');
    }

    public function storepass(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with('success', 'Password successfully changed!');
        } else {
            return back()->with('warning', 'Password Lama Salah!');
        }
    }
    public function changeprofile()
    {

        return view('/auth/edit-profile');
    }

    public function storeprofile(Request $request)
    {
        $user = Auth::user();
        Post::where('created_by', $user->name)
            ->update([
                'created_by'       =>   strtoupper($request->name),
            ]);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user->name = strtoupper($request->name);
        $user->email = $request->email;
        $user->save();

        return back()->with('success', 'Edit Profil Berhasil!');
    }
}
