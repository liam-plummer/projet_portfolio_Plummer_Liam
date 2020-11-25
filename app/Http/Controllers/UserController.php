<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('/',compact("users"));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $request -> validate([
            "birthday" => "required",
            "website" => "required",
            "phone" => "required",
            "city"=>"required",
            "age"=>"required",
            "degree"=>"required",
            "email"=>"required",
            "freelance"=>"required",
            "image" => "required"
        ]);
        $user->birthday = $request->birthday;
        $user->website = $request->website;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->degree = $request->degree;
        $user->email = $request->email;
        $user->freelance = $request->freelance;
        $user->image = $request->image;

        $user->path = $request->file("path")->hasName();
        $request->file("path")->storePublicly("img", "public");

        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = new User();

        $request -> validate([
            "birthday" => "required",
            "website" => "required",
            "phone" => "required",
            "city"=>"required",
            "age"=>"required",
            "degree"=>"required",
            "email"=>"required",
            "freelance"=>"required",
            "image" => "required"
        ]);
        
        Storage::disk("public")->delete("img/" . $user->path);

        $user->birthday = $request->birthday;
        $user->website = $request->website;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->degree = $request->degree;
        $user->email = $request->email;
        $user->freelance = $request->freelance;
        $user->image = $request->image;


        $user->path = $request->file("path")->hasName();
        $request->file("path")->storePublicly("img", "public");

        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Storage::disk("public")->delete("img/" . $user->path);
        $user->delete();
        return redirect()->back();
    }
}
