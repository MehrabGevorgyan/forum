<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|min:2|max:24',

            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->avatar = '/img/avatar.jpg';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if(($request->hasFile('avatar')))
        {
            $path = $request->avatar->store('users_avatars');
            $user->avatar = '/storage/'.$path;
        }

        $user->save();

        Auth::login($user);

        return redirect('/');
    }
}
