<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Post extends Model
{
    use HasFactory;
    Protected $fillable = ['id','title','content'];
    public $timestamps = true;
}
