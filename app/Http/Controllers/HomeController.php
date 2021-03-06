<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Fact;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $skills = Skill::all();
        $facts= Fact::all();
        $portfolios = Portfolio::all();
        return view('home', compact("users","skills","facts", "portfolios"));
    }
}
