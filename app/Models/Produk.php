<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    Protected $fillable = ['id','Nama_Produk','Merek','Jumlah'];
    public $timestamps = true;
}
