<?php

namespace Database\Seeders\Imm;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            "status"=>"1.- Inicio",
            'created_at' => now()
           ]);
           DB::table('status')->insert([
            "status"=>"2.-En Proceso",
            'created_at' => now()
           ]);
           DB::table('status')->insert([
            "status"=>"3.- Concluido",
            'created_at' => now()
           ]);
    }
}
