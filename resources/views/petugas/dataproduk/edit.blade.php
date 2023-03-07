@extends('petugas.layouts.layout')

@section('dashboard')

<h1>Edit Product</h1>

  <form method="POST" action="{{route('produk.update',$produk->id_produk)}}"  class="mb-5" enctype="multipart/form-data">
      @method('put')
      @csrf

      <div class="mb-3">
        <label for="name_produk" class="form-label">Name</label>
        <input type="text" class="form-control " id="name_produk" name="name_produk" value="{{$produk->name_produk}}">
      </div>
    
      <div class="mb-3">
        <label for="harga_awal" class="form-label">price</label>
        <input type="text" class="form-control " id="harga_awal" name="harga_awal" value="{{$produk->harga_awal}}">
    
      </div>

      <div class="mb-3 mt-3">
        <label for="tanggal_lelang" class="form-label">Auction Date</label>
        <input type="date" class="form-control " id="tanggal_lelang" name="tanggal_lelang" value="{{$produk->tanggal_lelang}}">
      
        <label for="id" class="form-label">Auction Status</label>
            <select class="form-select" aria-label="Default select example" id="status" name="status_lelang" value="{{$produk->status_lelang}}">
                <option selected>{{$produk->status_lelang}}</option>
               
                <option>open</option>
                <option>done</option>
               
              
              </select>


      <div class="mb-3">
        <label for="image" class="form-label">Input image</label>
        <input type="hidden" name='oldImage' value="{{$produk->image}}">
        <img src="{{asset('storage/' . $produk->image)}}" class="mb-3 col-sm-5 d-block mx " style="height:50% ">
        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
      </div>

      <div class="mb-3">
        <label for="detail" class="form-label">Detail</label>
        <textarea class="form-control" type="text"  name="detail" id="detail" cols="30" rows="10">{{$produk->detail}}</textarea>
        {{-- <input type="text" class="form-control " id="detail" name="detail" value="{{$produk->detail}}"> --}}

 
  <button type="submit" class="btn btn-primary mt-3">Edit Product</button>
</form>

    
@endsection