<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProdukPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks= Produk::all();
        return view('petugas.dataproduk',[
            'title'=>'DataProduk',
            'produks'=>$produks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.dataproduk.create',[
            'title'=> 'Add Produk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_produk'=>'required',
            'harga_awal'=>'required',
            'status_lelang'=>'required',
            'tanggal_lelang'=>'required',
            'image'=>'image|file|required',
            'detail'=>'required',
            ]);

       if($request->file('image')){
        $validatedData['image'] = $request->file('image')->store('produk-images');
       };

       Produk::create($validatedData);

       return redirect('/produk')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     * @param int $id_produk
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $produk = Produk::find($id);
        return view('petugas.dataproduk.show',[
            'produks'=> $produk,
            'title'=> 'Show'
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id_produk
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $produk = Produk::find($id);
        return view('petugas.dataproduk.edit',[
            'title'=> 'Update Produk',
            'produk'=> $produk

        ]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_produk)
    {
        $rules =[
            'name_produk'=>'required',
            'harga_awal' => 'required',
            'status_lelang'=>'required',
            'tanggal_lelang'=>'required',
            'image'=>'image|file|',
            'detail'=>'required',
        ];
        
        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('produk-images');
           };

        $produk = Produk::find($id_produk);
        $produk->where('id_produk',$produk->id_produk)
        ->update($validatedData);
        
        return redirect('/produk')->with('success', 'Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id_produk
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id_produk)
    {
        
        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
      
        $produk=Produk::where('id_produk',$id_produk);
        $produk->delete();
       
       return redirect('/produk')->with('gagah', 'Deleted Successfully');
    }
}
