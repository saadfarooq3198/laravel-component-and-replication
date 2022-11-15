<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(){
        $user = User::create([
            'name' => 'Saad Farooq',
            'email' => 'saadfarooq@gmail.com',
            'password' => '12345678',
        ]);
    }

    // cloning a user
    public function cloneUSer(){
        $user = User::find(1);
        $newUser = $user->replicate();
        $newUser->save();
    }
}
