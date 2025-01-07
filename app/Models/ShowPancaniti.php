<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShowPancaniti extends Model
{
    use HasFactory;

    protected $table = 'showpancaniti';

    protected $fillable = [
        'nama_pengguna',
        'nama_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'waktu_penggunaan',
    ];
}
