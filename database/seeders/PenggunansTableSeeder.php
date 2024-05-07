<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Penggunas = [
            ['Nama'=>'Andrian'],
            ['Nama'=>'Bedi'],
            ['Nama'=>'Radit'],
            ['Nama'=>'Rafly'],
            ['Nama'=>'Gandizz']
        ];
        //
        DB::table('penggunas')->insert($Penggunas);
       
    }
}
