<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "birthday" => "17/01/1999",
            "website" => "www.google.com",
            "phone" => "+32471234567",
            "city"=>"Bruxelles",
            "age"=>"21",
            "degree"=>"MolenGeek Diploma",
            "email"=>"random@email.com",
            "freelance"=>"available",
            "image" => "profile-img.jpg"
        ]);
    }
}
