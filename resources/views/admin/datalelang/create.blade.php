@extends('admin.layouts.layout')

@section('dashboard')

<h1>Create New User</h1>

      <form method="POST" action="/lelang">
        @csrf
        <label for="id" class="form-label">Id Produk</label>
        <select class="form-select" aria-label="Default select example" id="id_produk" name="id_produk">
            <option selected>Pilih id produk</option>
            @foreach($produk as $item)
            <option value="{{$item->id_produk}}">{{$item->id_produk}}</option>
            @endforeach
          
          </select>
        <div class="mb-3">
          <label for="username" class="form-label">Date</label>
          <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="tanggal" >

          @error('date')
          <div class="invalid-feedback">
            {{$message}}
            @enderror

        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Lelang</button>
      </form>

@endsection