<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;
    protected $primaryKey = "KoleksiPribadiID";
    protected $table = 'koleksipribadi';
}
