@extends('user.layout.navbar')

@section('content')
<main class="py-4">
    <div class="px-4">
        <div class="card text-center">
            <div class="card-header">
            LELANG
            </div>
            <div class="card-body">
            <h5 class="card-title">WELCOME</h5>
            <h6 class="card-title">{{auth()->user()->name}}</h6>
            <p class="card-text">In Our Auction App</p>
            <a href="/home" class="btn btn-primary">Show Product</a>
            </div>
    </div>
</main>
@endsection