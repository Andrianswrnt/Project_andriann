<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepons extends Model
{
    use HasFactory;

    Protected $fillable = ['id','No_Telepon','Pengguna_id'];
    public $timestamps = true;

    public function penggunas(){

        return $this->hasOne(Penggunas::class);
    }

}

