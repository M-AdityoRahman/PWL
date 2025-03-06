<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id = null)
    {
        if ($id) {
            return 'Halaman Artikel dengan ID ' . $id;
        } else {
            return 'Halaman Daftar Artikel';
        }
    }
}
