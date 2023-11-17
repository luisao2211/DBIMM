<?php

namespace Database\Seeders\imm;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Gender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gomezpalacio.gob.mx',
            'password' => Hash::make('admin123'),
           ]);
       DB::table('genders')->insert([
        "gender"=>"Femenino",
        'created_at' => now()
       ]);
     
       DB::table('genders')->insert([
        "gender"=>"Masculino",
        'created_at' => now()
       ]);
       DB::table('genders')->insert([
        "gender"=>"Lesbico",
        'created_at' => now()
       ]);
       DB::table('genders')->insert([
        "gender"=>"Gay",
        'created_at' => now()
       ]);
       DB::table('genders')->insert([
        "gender"=>"Trans",
        'created_at' => now()
       ]);
    }
}
