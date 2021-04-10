<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(User $user)
    {
        $user = User::get();
        return view('users.index', compact('user'));
    }
}
