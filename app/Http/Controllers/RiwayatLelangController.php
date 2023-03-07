<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class RiwayatLelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lelang= Lelang::with('produks','users')->get();
        return view('admin.riwayat',[
            'title'=>'Riwayat',
            'lelangs'=> $lelang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function show(Lelang $lelang,$id_lelang)
    {
        $lelang= Lelang::with('produks','users')->find($id_lelang);
        // $lelang = Lelang::where('id_produk', $produk->id_produk,)->get();
        // $produk = Produk::find($id_produk);
        return view('admin.laporan.show',[
            'title'=> 'laporan',
            'lelangs'=> $lelang

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function edit(Lelang $lelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lelang $lelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lelang $lelang)
    {
        //
    }
}
