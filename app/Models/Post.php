<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $table ="posts";
    protected $fillable =['judul', 'isi', 'gambar', 'created_by','updated_by'];
}
