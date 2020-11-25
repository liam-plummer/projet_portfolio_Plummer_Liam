<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            "number"=>"32",
            "description"=>"Happy Clients lorem Ipsum",
            "icon"=>"icofont-simple-smile"
        ]);
        DB::table('facts')->insert([
            "number"=>"521",
            "description"=>"Projects worked on",
            "icon"=>"icofont-document-folder"
        ]);
        DB::table('facts')->insert([
            "number"=>"1463",
            "description"=>"Hours of Support",
            "icon"=>"icofont-live-support"
        ]);
        DB::table('facts')->insert([
            "number"=>"13",
            "description"=>"Hard Workers",
            "icon"=>"icofont-users-alt-5"
        ]);
    }
}
