<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Muhammad Adityo Rahman <br> Nim.2341720177';
    }
    public function articles($id = null) {
        if ($id) {
            return 'Halaman Artikel dengan ID ' . $id;
        } else {
            return 'Halaman Daftar Artikel';
        }
    }
    
}
