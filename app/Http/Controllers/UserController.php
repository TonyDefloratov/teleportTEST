<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submit(UserRequest $request) {
        $usr = new User();
        $usr->name = $request->input('name');
        $usr->email = $request->input('email');
        $usr->password = $request->input('password');

        $usr->save();

        return redirect()->route('index');
    }
}
