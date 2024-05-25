<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('Halaman.index');
    }

    public function login()
    {
        $title = "Login SIRPL Politeknik Kampar";
        return view('Login/index', compact('title'));
    }

    public function dashboard(){
        $title = "Dashboard";
        return view('Halaman.dashboard', compact('title'));
    }
}
