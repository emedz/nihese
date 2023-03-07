@extends('user.layout.navbar')

@section('content')
 
    <main class="py-4">
        <div class="px-4">
            <div class="row">
                @foreach ($produks as $produk)
                <div class="col-md-3">
                    <div class="card " >
                        <img src="{{asset('storage/' . $produk->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$produk->name_produk}}</h5>
                        <p class="card-text">{{$produk->harga_awal}}</p>
                        <a href="{{route('home.show', $produk->id_produk)}}" class="btn btn-primary">Auction</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

  
@endsection