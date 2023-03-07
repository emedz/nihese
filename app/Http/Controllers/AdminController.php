<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $produk = DB::table('produks')->count();
        $lelang = DB::table('lelangs')->count();
        $riwayat = DB::table('lelangs')->where('status','winner')->count();
        $user = DB::table('users')->where('level','user')->count();
        $petugas = DB::table('users')->where('level','petugas')->count();


        return view('admin.dashboard',[
            'title'=> 'Dashboard',
            'produk'=> $produk,
            'lelang'=> $lelang,
            'user'=> $user,
            'petugas'=> $petugas,
            'riwayat'=> $riwayat,
        ]);
    }
}
