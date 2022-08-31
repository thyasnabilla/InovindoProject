<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('auth-register');
    }
    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required',
            'password2' => ['required', 'same:password']

        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password2'] = bcrypt($validatedData['password2']);
        User::create($validatedData);
        return redirect('/register/verify');
    }
}
