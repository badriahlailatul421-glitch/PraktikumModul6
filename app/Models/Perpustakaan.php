<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'kota'];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
