<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBukuRelasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'KategoriBukuRelasiID';
    protected $table = 'kategori_buku_relasi';
}
