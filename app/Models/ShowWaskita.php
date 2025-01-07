<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowWaskita extends Model
{
    use HasFactory;

    protected $table = 'showwaskita';

    protected $fillable = [
        'nama_pengguna',
        'nama_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'waktu_penggunaan',
    ];
}
