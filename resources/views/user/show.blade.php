@extends('user.layout.navbar')

@section('content')

<main class="py-4">
    <div class="px-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="{{asset('storage/' . $produk->image)}}" alt="" class="card-img-top" style="height:350x" style="width: 300px">
                </div> 
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                      
                        <div class="card-title"><b>Name :</b> {{$produk->name_produk}}</div> 
                        <p class="card-text ">
                            <b>Price :</b> {{$produk->harga_awal}}
                        </p>
                        <p class="card-text ">
                            <b>Auction Date :</b> {{$produk->tanggal_lelang}}
                        </p>
                        <p class="card-text">
                            <b>Detail:</b>
                        </p>
                        <p class="card-text">
                            {{$produk->detail}}
                        </p>
                       

                        @if($produk->status_lelang == 'closed')
                        <h3>Auction Not Yet Open</h3>
                        <a href="/home" class="btn btn-secondary mt-4 d-inline">Back</a>

                        @elseif($produk->status_lelang == 'open')
                        <h3 class="mt-2">Auction Here</h3>
                        <form method="POST" action="/lelang">
                            @csrf

                            <input type="hidden" name="id_produk" value="{{$produk->id_produk}}">

                            <div class="mb-3 mt-1">
                                <label for="disabledTextInput" class="form-label">Price Input</label>
                                <input type="text" id="penawaran_harga" name="penawaran_harga" class="form-control" placeholder="Input Price Here">
                              </div>

                              <button type="submit" class="btn btn-primary ">Auction</button>
                             
                              <a href="/home" class="btn btn-secondary mt-3 d-inline">Back</a>


                        </form>
                        @elseif($produk->status_lelang == 'done')
                        <h3>Auction Has Ended</h3>
                        <a href="/home" class="btn btn-secondary mt-4 d-inline">Back</a>
                        @endif
                        
                    </div> 
                </div> <!---card-->
            </div><!--melang-->
    @if ($produk->status_lelang == 'open')
        <h1 class="text-center mt-3">Bidders</h1>
           
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Name</th>
                              <th scope="col">Bargaining Price</th>
                              <th scope="col">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($lelang as $item)
                            <tr>
                              <td>{{$loop->iteration}}</</td>
                              <td>{{$item->users->name}}</</td>
                              <td>{{$item->penawaran_harga}}</</td>
                              <td>{{$item->status}}</</td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
          
           
               
           @elseif($produk->status_lelang == 'done')

           <h1 class="text-center mt-3">Bidders</h1>
           
           <table class="table table-bordered ">
               <thead>
                   <tr>
                     <th scope="col">No</th>
                     <th scope="col">Name</th>
                     <th scope="col">Bargaining Price</th>
                     <th scope="col">Status</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($lelang as $item)
                   <tr>
                     <td>{{$loop->iteration}}</</td>
                     <td>{{$item->users->name}}</</td>
                     <td>{{$item->penawaran_harga}}</</td>
                     <td>{{$item->status}}</</td>
                   </tr>
                   @endforeach
                 </tbody>
             </table>

           @elseif($produk->status_lelang == 'closed')
               
    @endif
              
@endsection