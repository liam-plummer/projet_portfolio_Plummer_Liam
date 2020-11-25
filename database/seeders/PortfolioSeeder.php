<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-1.jpg')}}",
            "category"=>"App 1"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-2.jpg')}}",
            "category"=>"Web 3"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-3.jpg')}}",
            "category"=>"App 2"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-4.jpg')}}",
            "category"=>"Card 2"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-5.jpg')}}",
            "category"=>"Web 2"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-6.jpg')}}",
            "category"=>"App 3"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-7.jpg')}}",
            "category"=>"Card 1"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-8.jpg')}}",
            "category"=>"Card 3"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"{{asset('img/portfolio/portfolio-8.jpg')}}",
            "category"=>"Web 3"
        ]);
    }
}
