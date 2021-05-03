<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts,$judul,$isi,$gambar;
    public $updateMode = false;

    public function render()
    {       
        $this->posts = Post::orderBy('created_at', 'DESC')->get();
        return view('kelola/informasi');
    }
    private function resetInput()
    {
        $this->judul = null;
        $this->isi = null;
    }
    public function store()
    {
        $this->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        Post::create([
            'judul' => $this->judul,
            'isi' => $this->isi
        ]);

        $this->resetInput();
    }
    public function edit($id)
    {
        $record = Post::findOrFail($id);

        $this->selected_id = $id;
        $this->judul = $record->judul;
        $this->isi = $record->isi;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'judul' => 'required|min:5',
            'isi' => 'required'
        ]);

        if ($this->selected_id) {
            $record = Post::find($this->selected_id);
            $record->update([
                'judul' => $this->judul,
                'isi' => $this->isi
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = Post::where('id', $id);
            $record->delete();
        }
    }
}
