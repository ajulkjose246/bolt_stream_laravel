<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $incomingfields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200'],
        ]);
        $incomingfields['password'] = bcrypt($incomingfields['password']);
        $user = User::create($incomingfields);
        auth()->login($user);
        return redirect('/');
    }

    public function signin(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(['name' => $incomingFields['name'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
            if (auth()->user()->role === 1) {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        }

        return redirect('/register')->with('error', 'Invalid login credentials');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

}
