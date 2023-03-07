@extends('petugas.layouts.layout')

@section('dashboard')

<h1>Create New Product</h1>

<form method="POST" action="/produk" enctype="multipart/form-data"> 
  @csrf
  <div class="mb-3">
    <label for="name_produk" class="form-label">Name</label>
    <input type="text" class="form-control " id="name_produk" name="name_produk" value="{{old('name_produk')}}">
  </div>

  <div class="mb-3">
    <label for="harga_awal" class="form-label">Price</label>
    <input type="text" class="form-control " id="harga_awal" name="harga_awal" value="{{old('harga_awal')}}">

    <div class="mb-3 mt-3">
      <label for="tanggal_lelang" class="form-label">Auction Date</label>
      <input type="date" class="form-control " id="tanggal_lelang" name="tanggal_lelang" value="{{old('tanggal_lelang')}}">
    
      <label for="id" class="form-label">Auction Status</label>
          <select class="form-select" aria-label="Default select example" id="status" name="status_lelang">
              <option selected>Select status</option>
             
              <option>closed</option>
              <option>open</option>
              <option>done</option>
             
            
            </select>

    <div class="mb-3 mt-3">
      <label for="image" class="form-label">Input image</label>
      <img class="img-preview img-fluid">
      <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
    </div>

  </div>
  <div class="mb-3">
    <label for="detail" class="form-label">Detail</label>
    <textarea class="form-control" type="text"  name="detail" id="detail" cols="30" rows="10" value="{{old('detail')}}"></textarea>
    {{-- <input type="text" class="form-control " id="detail" name="detail" value="{{old('detail')}}"> --}}
  
  
  <button type="submit" class="btn btn-primary mt-3">Add Product</button>
</form>
         

<script>

  function(){

    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display='block';
    const oFReader = new FileRader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPriview.src = oFREvent.target.result;
    }

  }
    

</script>
    
@endsection