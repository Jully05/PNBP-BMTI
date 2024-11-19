<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Building extends Model
{
    use HasFactory;

    // Properti $fillable untuk melindungi kolom yang dapat diubah
    protected $fillable = [
        'name',
        'price',
        'image',
        'images', // Kolom untuk menyimpan gambar
        'description',
        'kapasitas',
        'ruang',
        'AC',
        'wifi',
        'parkir',
        'toilet',
        'viproom',
    ];

    // Menambahkan casting untuk kolom 'images' agar otomatis diubah menjadi array
    protected $casts = [
        'images' => 'array',
    ];

    // Accessor untuk mendapatkan gambar pertama dari 'images'
    public function getMainImageAttribute()
    {
        return $this->images[0] ?? null; // Mengembalikan gambar pertama atau null jika tidak ada
    }

    // Mutator untuk memastikan penyimpanan images sebagai JSON
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

    // Menghapus gambar yang terkait dengan gedung
    public function deleteImage()
    {
        // Menggunakan Storage untuk menghapus gambar
        if ($this->image && Storage::disk('public')->exists($this->image)) {
            Storage::disk('public')->delete($this->image);
        }

        // Menghapus gambar lainnya yang tersimpan dalam 'images' jika ada
        if ($this->images) {
            foreach ($this->images as $image) {
                if (Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }
        }
    }

}
