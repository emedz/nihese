@extends('admin.layouts.layout')

@section('dashboard')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Auction History</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Id Auction</th>
          <th scope="col">Id User</th>
          <th scope="col">Name</th>
          <th scope="col">Gmail</th>
          <th scope="col">Id Product</th>
          <th scope="col">Product</th>
          <th scope="col">Starting Price</th>
          <th scope="col">Bargaining Price</th>
          <th scope="col">Status</th>
          <th scope="col">Date</th>
          <th scope="col">Image</th>
         
         
          
        </tr>
      </thead>
      <tbody>
        @foreach ($lelangs->where('status','winner') as $item)
        
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->id_lelang}}</td>
          <td>{{$item->id}}</td>
          <td>{{$item->users->name}}</td>
          <td>{{$item->users->email}}</td>
          <td>{{$item->id_produk}}</td>
          <td>{{$item->produks->name_produk}}</td>
          <td>{{$item->produks->harga_awal}}</td>
          <td>{{$item->penawaran_harga}}</td>
          <td>{{$item->status}}</td>
          <td>{{$item->created_at}}</td>
          <td><img src="{{asset('storage/' . $item->produks->image)}}" alt="" srcset="" style="height: 50px" style="width: 50px"></td>
        
          {{-- <td><button class="btn btn-info" href="{{route('riwayat.show', $lelangs->id_lelang)}}"><i class="bi bi-printer"></i></button></td> --}}
         
        </tr> 
        @endforeach
      </tbody>

    </table>
  </div>
</main>
</div>
</div>




    
@endsection