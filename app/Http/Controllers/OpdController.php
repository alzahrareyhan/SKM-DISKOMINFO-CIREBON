<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpdController extends Controller
{
    public function index()
    {
        // Logika untuk mengambil data yang dibutuhkan untuk view
        return view('pages.public.opd'); // Sesuaikan dengan lokasi view yang benar
    }
}

