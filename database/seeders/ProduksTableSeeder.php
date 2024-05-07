<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Produks = [
             ['Nama_Produk'=>'KSK01','Merek'=>'Kawasaki','Jumlah'=> 120 ],
             ['Nama_Produk'=>'KSK02','Merek'=>'Kawasaki','Jumlah'=> 210 ],
             ['Nama_Produk'=>'KSK03','Merek'=>'Kawasaki','Jumlah'=> 222 ],
             ['Nama_Produk'=>'YMH01','Merek'=>'Yamaha','Jumlah'=> 99 ],
             ['Nama_Produk'=>'YMH99','Merek'=>'Yamaha','Jumlah'=> 20 ],
             ['Nama_Produk'=>'YMH69','Merek'=>'Yamaha','Jumlah'=> 100],
             ['Nama_Produk'=>'SZK21','Merek'=>'Suzuki','Jumlah'=> 150],
             ['Nama_Produk'=>'SZK11','Merek'=>'Suzuki','Jumlah'=> 111],
             ['Nama_Produk'=>'BMW101','Merek'=>'BMW','Jumlah'=> 10],
             ['Nama_Produk'=>'BMW01','Merek'=>'BMW','Jumlah'=> 5 ],
             
        ];
        //
        DB::table('Produks')->insert($Produks);
    }
}
