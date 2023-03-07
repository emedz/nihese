@extends('petugas.layouts.layout')

@section('dashboard')

<a href="/produk/create" class="btn btn-secondary mb-3">Add Product</a>

@if(session()->has('berhasil'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('berhasil')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
@if(session()->has('success'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif

    @if(session()->has('gagah'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('gagah')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Detail</th>
          <th scope="col">Auction Date</th>
          <th scope="col">Auction Status</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produks as $item)
        
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->id_produk}}</td>
          <td>{{$item->name_produk}}</td>
          <td>{{$item->harga_awal}}</td>
          <td>{{$item->detail}}</td>
          <td>{{$item->tanggal_lelang}}</td>
          <td>{{$item->status_lelang}}</td>
          
          <td><img src="{{asset('storage/' . $item->image)}}" alt="" srcset="" style="height: 50px" style="width: 50px"></td>
          <td>
            <button class="btn border-0 btn-info d-inline"><a href="{{route('produk.show', $item->id_produk)}}"><img src="/img/eye.svg" class="logo" alt="" srcset=""></a></button>
          </td>
          <td>
            <button class="btn border-0 btn-warning d-inline"><a href="{{route('produk.edit', $item->id_produk)}}"><img src="/img/edit.svg" class="logo" alt="" srcset=""></a></button>
          </td>
          <td>
            <form action="{{ route('produk.destroy',$item->id_produk) }}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><img src="/img/trash-2.svg" class="logo" alt="" srcset=""></button>
            </form>
          </td>
          
        </tr>
        @endforeach
      </tbody>

    </table>
  </div>
</main>
</div>
</div>


    
@endsection