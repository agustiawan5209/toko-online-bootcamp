<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page; // Pastikan model Page sudah dibuat

class PageController extends Controller
{
    // Tampilkan semua halaman
    public function index()
    {
        return view('pages.index');
    }

}
