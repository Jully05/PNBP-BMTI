<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    // Tambahkan properti $fillable
    protected $fillable = [
        'name',
        'price',
        'image', // Kolom yang boleh diisi secara massal
        'description',
    ];
}
