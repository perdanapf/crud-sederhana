<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view ('home');
    }
    public function tentang()
    {
        return view ('tentang');
    }
    public function kontak()
    {
        return view ('kontak');
    }
}