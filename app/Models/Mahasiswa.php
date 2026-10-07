<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Pastikan npm, nama, dan prodi dimasukkan ke dalam $fillable
    protected $fillable = [
        'npm',
        'nama',
        'prodi',
    ];
}