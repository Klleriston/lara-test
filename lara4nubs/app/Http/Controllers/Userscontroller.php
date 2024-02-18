<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    public function getProfile(String $username)
    {
        $characters = ['gojo', 'luffy', 'subaru', 'rudy', 'naruto'];
        return view('users', compact('username', 'characters'));
    }

    public function getAdminProfile(String $username)
    {
        $username = "KEKZ";
        return "Hello" . PHP_EOL . $username;
    }

    public function test(TestRequest $request) //injeção ded dependencia 
    {
        // return response()->json([
        //     'name' => 'kekz',
        //     'age' => 20
        // ], 200);
        // return redirect(route('user-profile', ['username'=> 'KEKZ']));
        // dd($request->all()); --> retorna um array

    }
}
