<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {
            $Telepons = [
                ['No_Telepon'=>'082120950560','Pengguna_id'=>1],
                ['No_Telepon'=>'081572834255','Pengguna_id'=>2],
                ['No_Telepon'=>'085860678663','Pengguna_id'=>3],
                ['No_Telepon'=>'082120355346','Pengguna_id'=>4],
                ['No_Telepon'=>'081573896554','Pengguna_id'=>5]
              
            ];
            //
            DB::table('Telepons')-> insert($Telepons);
           
        }
    }
}
