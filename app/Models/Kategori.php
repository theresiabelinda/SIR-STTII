<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategoris";
    protected $primaryKey = "id_kategori";
    protected $fillable = ["nama_kategori"];
}