@extends('admin.layouts.layout')

@section('dashboard')


  <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" class="btn btn-secondary mt-3 mb-3 d-inline">Send Message</a>


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
    <table class="table table-striped table-sm mt-3">
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
          <th scope="col">Action</th>
          <th scope="col"></th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($lelangs as $item)
        
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
          <td>
            <button class="btn border-0 btn-warning d-inline"><a href="{{route('lelang.edit', $item->id_lelang)}}"><img src="/img/edit.svg" class="logo" alt="" srcset=""></a></button>
          </td>
          <td>
            <form action="{{ route('lelang.destroy',$item->id_lelang) }}" method="post" class="d-inline">
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