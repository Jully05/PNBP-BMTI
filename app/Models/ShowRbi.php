<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShowRbi extends Model
{
    use HasFactory;

    protected $table = 'showrbi';

    protected $fillable = [
        'nama_pengguna',
        'nama_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'waktu_penggunaan',
    ];

    // protected $dates = ['tanggal_mulai', 'tanggal_selesai'];

    // public function setTanggalMulaiAttribute($value)
    // {
    //     $this->attributes['tanggal_mulai'] = Carbon\Carbon::parse($value);
    // }

    // public function setTanggalSelesaiAttribute($value)
    // {
    //     $this->attributes['tanggal_selesai'] = Carbon\Carbon::parse($value);
    // }
}
