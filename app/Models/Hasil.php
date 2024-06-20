<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $fillable = [
        
    'noStaff', 
    'kinerja',
    'kedisiplinan',
    'inisiatif',
    'kerjasama',
    'presensi',
    'ahp'
];
    protected $dates = ['deleted_at'];
}
