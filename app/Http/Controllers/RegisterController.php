<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $users = User::all();

        foreach($users as $user){
            if($user->email == $request->email || $user->username == $request->username){
                // return view('welcome', ['email' => $request->email, 'mssg' => 'already on the mailingList']);
                return back()->with('mssg', 'username and email already taken');
            } else {
                User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
            }
        }

       

        auth()->attempt($request->only('email', 'password'));


        return redirect()->route('dashboard');
    }
}