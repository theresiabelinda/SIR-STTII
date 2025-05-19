<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'abstrak',
        'penulis',
        'tahun',
        'file',
        'status',
    ];

    public function kategori()
{
    return $this->belongsTo(Kategori::class,'id_kategori','id');
}
}
