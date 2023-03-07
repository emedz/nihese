@extends('petugas.layouts.layout')

@section('dashboard')
<main class="py-4">
    <div class="px-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="{{asset('storage/' . $produks->image)}}" alt="" class="card-img-top" style="height:300px" style="width: 300px">
                </div> 
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                      
                        <div class="card-title"><b>Name :</b> {{$produks->name_produk}}</div> 
                        <p class="card-text">
                            <b>Price :</b> {{$produks->harga_awal}}
                        </p>
                        <p class="card-text">
                            <b>Auction Date :</b> {{$produks->tanggal_lelang}}
                        </p>
                        <p class="card-text">
                            <b>Auction Status :</b> {{$produks->status_lelang}}
                        </p>
                        <p class="card-text">
                            <b>Detail:</b>
                        </p>
                        <p class="card-text">
                            {{$produks->detail}}
                        </p>
                        <a href="/produk" class="btn btn-primary">Back</a>
                    </div> 
                </div> <!---card-->
            </div><!--melang-->

@endsection