<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view('session/index');

    }


    public function register()
    {
        return view('session/register');
    }


    public function create(Request $request)
    {
        Session::flash('name', $request->nama);
        Session::flash('email', $request->email);
        $data=[
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);


        $datalogin=[
            'email' => $request->email,
            'password' => ($request->password)
        ];

        if(Auth::attempt($datalogin)) {
            return redirect('/beranda')->with(['pesan' => 'Pembuatan Akun dan Login Berhasil']);
        }

        else {
            return redirect('/register')->with(['pesan' => 'Email dan Password Tidak sesuai']);
            }

    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $datalogin=[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($datalogin)) {
            return redirect('/beranda')->with(['pesan' => 'Login Berhasil']);
        }

        else {
            return redirect('/')->with(['pesan' => 'Email atau Password Tidak Sesuai']);
            }
        }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with(['pesan' => 'Logout Berhasil']);
    }
}
