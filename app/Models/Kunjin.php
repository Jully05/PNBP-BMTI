<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjin extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama_sekolah',
        'nama_pic',
        'nomor_hp',
    ];
    protected $table = 'kunjins';
}
