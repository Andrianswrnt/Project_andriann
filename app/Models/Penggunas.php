<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Penggunas extends Model
{
    use HasFactory;
    Protected $fillable = ['id','nama'];
    public $timestamps = true;

    public function telepons(){

        return $this->belongsTo(telepons::class,'Pengguna_id');
        
    }
}
