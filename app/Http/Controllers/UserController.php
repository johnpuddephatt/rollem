<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public static function show(User $user)
    {
        if (!$user->show_in_staff_directory) {
            abort(404, "User not found");
        }
        return view("user.show", compact("user"));
    }
}
