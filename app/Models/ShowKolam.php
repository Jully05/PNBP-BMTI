<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowKolam extends Model
{
    use HasFactory;

    protected $table = 'showkolam';

    protected $fillable = [
        'nama_pengguna',
        'nama_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'waktu_penggunaan',
    ];
}
