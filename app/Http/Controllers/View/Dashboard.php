<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Pemberitahuan;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function user()
    {
        $pemberitahuans = Pemberitahuan::where('status', 'aktif')->get();
        $bukus = Buku::all();
        return view('user.dashboard', compact('pemberitahuans', 'bukus'));
    }
}
