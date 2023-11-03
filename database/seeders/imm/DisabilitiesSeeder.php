<?php

namespace Database\Seeders\Imm;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DisabilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disabilities')->insert([
            "disability"=>"Motriz",
            'created_at' => now()
           ]);
           DB::table('disabilities')->insert([
            "disability"=>"Auditiva",
            'created_at' => now()
           ]);
           DB::table('disabilities')->insert([
            "disability"=>"Intelectual",
            'created_at' => now()
           ]);
           DB::table('disabilities')->insert([
            "disability"=>"Visual",
            'created_at' => now()
           ]);
    }
}
