<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    public function getProfile(String $username)
    {
        return view('users', compact('username'));
    }

    public function getAdminProfile(String $username)
    {
        $username = "KEKZ";
        return "Hello" . PHP_EOL . $username;
    }
}
