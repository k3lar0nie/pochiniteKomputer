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

    public function loginForm() {
        return view('user.login');
    }
    public function login(Request $request) {
        // dd($request->all());
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            session()->flash('success', 'you are mogged');
            if(Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            } 
            else {
                return redirect()->home();
            }
        }

        return redirect()->back()->with('error', 'incorrect password or login or password or login or or login password login or pass or word or log');

    }
    public function logout() {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
