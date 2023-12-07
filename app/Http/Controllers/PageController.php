<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tables()
    {
        $activePage = 'tables';
        return view('pages.tables');
    }

    public function formPeminjaman()
    {
        $activePage = 'form-peminjaman';
        return view('pages.form-peminjaman');
    }
}
