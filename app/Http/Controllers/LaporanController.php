<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Lelang;

class LaporanController extends Controller
{
    public function index()
    {
        $user = User::where('level','admin');
        $lelang= Lelang::with('produks','users')->get();
        return view('admin.laporan',[
            'title'=>'LAPORAN',
            'lelangs'=> $lelang,
            'user'=> $user
        ]);
    }
}
