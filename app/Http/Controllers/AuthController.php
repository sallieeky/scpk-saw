<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function loginPost(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect("/");
        }
        else
        {
            return back()->with("error", "Email atau Password salah!");
        }
    }

    public function daftar()
    {
        return view("daftar");
    }
    public function daftarPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if($request->password == $request->password_validate)
        {
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            Auth::login($user);
            return redirect("/insert-data-profile");
        }
        else
        {
            return back()->with("error", "Password tidak sama!");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
}
