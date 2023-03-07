@extends('admin.layouts.layout')

@section('dashboard')
<main class="py-4">
    <div class="px-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="{{asset('storage/' . $produk->image)}}" alt="" class="card-img-top" style="height:300px" style="width: 300px">
                </div> 
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                      
                        <div class="card-title"><b>Name :</b> {{$produk->name_produk}}</div> 
                        <p class="card-text">
                            <b>Price :</b> {{$produk->harga_awal}}
                        </p>
                        <p class="card-text">
                            <b>Auction Date :</b> {{$produk->tanggal_lelang}}
                        </p>
                        <p class="card-text">
                            <b>Auction Status :</b> {{$produk->status_lelang}}
                        </p>
                        <p class="card-text">
                            <b>Detail:</b>
                        </p>
                        <p class="card-text">
                            {{$produk->detail}}
                        </p>
                        <a href="/dataproduk" class="btn btn-primary">Back</a>
                    </div> 
                </div> <!---card-->
            </div><!--melang-->

@endsection