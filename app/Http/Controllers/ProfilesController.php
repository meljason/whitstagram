<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //return the proper error if user is not found - findOrFail
        $user = User::findOrFail($user);

        return view('home', [
            'user' => $user,
        ]);
    }
}
