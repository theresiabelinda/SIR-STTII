<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategoris";
    protected $primaryKey = "id";
    protected $fillable = ["nama_kategori"];
}