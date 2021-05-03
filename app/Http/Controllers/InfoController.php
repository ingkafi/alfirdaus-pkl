<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function kelolainfo()
    {
        $posts = DB::table('posts')->get()->sortByDesc('created_at');
        return view('/kelola/informasi/index', ['posts' => $posts]);
    }
    public function showinfo(Post $post)
    {
        $post = DB::table('posts')->where('id', $post->id)->first();
        return view('/kelola/informasi/show', ['post' => $post]);
    }
    public function updateinfo(Post $post)
    {
        $posts = DB::table('posts')->get()->sortByDesc('created_at');
        $post = DB::table('posts')->where('id', $post->id)->first();
        return view('/kelola/informasi/edit', ['post' => $post,'posts' => $posts]);
    }
    public function storeinfo(Request $request, Post $post)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar.*' => 'mimes:jpeg,jpg,png,PNG'
            ]);
            
        if ($request->hasfile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/gambar/', $name);
                $imgData[] = $name;
            }
            $post->gambar = json_encode($imgData);
            $post->save();
        }
        Post::where('id', $post->id)
        ->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'updated_by' =>  auth()->user()->name,
            ]);                
        return redirect()->route('kelolainfo')->with('success', 'Edit Informasi Berhasil!');
    }
    public function deleteinfo(Post $post)
    {
        $post = Post::where('id', $post->id);
        $post->delete();
        return redirect()->route('kelolainfo')->with('success', 'Hapus Informasi Berhasil!');
    }
    public function forminfo()
    {
        return view('/kelola/informasi/create');
    }
   
   
    public function createinfo(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar.*' => 'required|mimes:jpeg,jpg,png,PNG'
        ]);
        if ($request->hasfile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/gambar/', $name);
                $imgData[] = $name;
            }
            $request->gambar = json_encode($imgData);
        }
        $form_data = array(
            'judul'       =>   $request->judul,
            'isi'        =>   $request->isi,
            'gambar'            =>   $request->gambar,
            'created_by' => auth()->user()->name,
        );
        Post::create($form_data); 
        return redirect()->route('kelolainfo')->with('success', 'Tambah Informasi Berhasil!');
    }
}
    