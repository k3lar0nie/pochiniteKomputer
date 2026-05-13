<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        // dd($request->all);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', 'молодец а тперь пошел наъуй отсюда с моего сайта сука');
        Auth::login($user);
        return redirect()->route('home');
    }
}
