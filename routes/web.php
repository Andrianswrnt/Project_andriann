<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Penggunas;
use App\Models\Telepons;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_post', function () {

    $posts = Post::all();
    return view ('view_posts', compact('posts'));

});

Route::get('/data_pengguna', function () {

    $Penggunas = Penggunas::all();
    return view ('view_pengguna', compact('Penggunas'));

});

Route::get('/data_telepon', function () {

    $Telepons = Telepons::all();
    return view ('view_telepon', compact('Telepons'));

});

Route::get('/data_produk', function () {

    $Produks = Produk::find(3);
    // return view ('view_produks', compact('Produks'));
    return $Produks ;

});
