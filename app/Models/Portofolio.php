<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table ="portofolio";
    protected $fillable =[
        'nis', 
        'judul',
        'grade',
        'file',
        'kategori',
    ];
}
