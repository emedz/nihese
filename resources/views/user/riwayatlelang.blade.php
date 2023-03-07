@extends('user.layout.navbar')

@section('content')
<div class="px-4">
<table class="table table-success table-striped mt-3">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Product</th>
          <th scope="col">Starting Price</th>
          <th scope="col">Bargaining Price</th>
          <th scope="col">Status</th>
          <th scope="col">Date</th>
          <th scope="col">Image</th>
       
          
        </tr>
      </thead>
      <tbody>
        @foreach ($lelang as $item)
        
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->users->name}}</td>
          <td>{{$item->produks->name_produk}}</td>
          <td>{{$item->produks->harga_awal}}</td>
          <td>{{$item->penawaran_harga}}</td>
          <td>{{$item->status}}</td>
          <td>{{$item->created_at}}</td>
          <td><img src="{{asset('storage/' . $item->produks->image)}}" alt="" srcset="" style="height: 50px" style="width: 50px"></td>
        </tr>
        @endforeach
      </tbody>

  </table>
</div>

@endsection