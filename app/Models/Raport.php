<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    protected $table ="raports";
    protected $fillable =[
        'nis', 
        'raport_7_1',
        'raport_7_2',
        'raport_8_1',
        'raport_8_2',
        'raport_9_1',
        'raport_9_2',
        'raport_10_1',
        'raport_10_2',
        'raport_11_1',
        'raport_11_2',
        'raport_12_1',
        'raport_12_2', 
    ];
}
