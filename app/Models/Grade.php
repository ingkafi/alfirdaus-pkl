<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table ="grades";
    protected $fillable =[ 
        'grade7',
        'grade8',
        'grade9',
        'grade10',
        'grade11',
        'grade12',
    ];
}
