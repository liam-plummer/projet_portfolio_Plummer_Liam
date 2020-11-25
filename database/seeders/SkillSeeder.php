<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            "language"=>"HTML",
            "percentage"=>"95"
        ]);
        DB::table('skills')->insert([
            "language"=>"CSS",
            "percentage"=>"84"
        ]);
        DB::table('skills')->insert([
            "language"=>"JAVASCRIPT",
            "percentage"=>"97"
        ]);
        DB::table('skills')->insert([
            "language"=>"PHP",
            "percentage"=>"62"
        ]);
        DB::table('skills')->insert([
            "language"=>"WORDPRESS",
            "percentage"=>"71"
        ]);
        DB::table('skills')->insert([
            "language"=>"PHOTOSHOP",
            "percentage"=>"78"
        ]);
    }
}
