<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Produk $produk)
    {
       
        $lelang= Lelang::with('produks','users')->get();
        // $posts = Post::with('user')->get();
        // $produk = Produk::with('produks');
        return view('admin.datalelang',[
            'title'=>'DataLelang',
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
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLelangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
        $user = auth()->user(); // ambil user yang sedang login
        $lelang = $user->lelangs()->create([
            'id_produk' => $request->id_produk,
            'penawaran_harga' => $request->penawaran_harga
        ]);
        // $lelang = new User();
        // $lelang->id = auth()->user()->id;
        // $validatedData = $request->validate([
        //         'id_produk'=>'required',
        //         'tanggal'=>'required',
        //         'id'=> $this->auth()->user()->id,
        //         ]);
    
        // $lelang->other_column = $request->input('other_column');

        // $produk = Produk::all();
        // $user = User::where('id',$id);
        // $produk = Produk::find($id_produk);
        // $lelang = $request->$user->lelang()->validate([
        //     // 'harga_awal' => $harga_awal,
        //     'harga_akhir' => $harga_akhir,
        //     'id_produk' => $produk->id,
        //     'tanggal'=>$tanggal,
        // ]);
        // $validatedData = $request->validate([
        //     'id_produk'=>'required',
        //     'tanggal'=>'required',
        //     ]);

            // Lelang::create($lelang);
            // Lelang::create($validatedData);

            return back()->with('success', 'hh Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function show(Lelang $lelang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function edit(Lelang $lelang)
    {
       
        $lelang->where('id_lelang',$lelang->id_lelang);
        return view('admin.datalelang.edit',[
            'title'=> 'Update Lelang',
            'lelang'=> $lelang

        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLelangRequest  $request
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Lelang $lelang)
    {
        $rules =[
            'status'=>'required',
           
        ];

        $validatedData = $request->validate($rules);
     

        $lelang->where('id_lelang',$lelang->id_lelang)
        ->update($validatedData);
        
        return redirect('/lelang')->with('success', 'Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_lelang)
    {
        $lelang=Lelang::find($id_lelang);
        $lelang->delete();
        return redirect('/lelang')->with('gagah', 'Deleted Successfully');
    }
}
