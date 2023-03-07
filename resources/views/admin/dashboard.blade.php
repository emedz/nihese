@extends('admin.layouts.layout')

@section('dashboard')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">

    <!-- data user -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
                    </div>
                    <div>
                        {{-- <img src="img/user.png" alt="" srcset="" class="img2"> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- data petugas-->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Officer</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$petugas}}</div>
                    </div>
                    <div>
                        {{-- <img src="img/user.png" alt="" srcset="" class="img2"> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- data barang -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Inventory
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$produk}}</div>
                            </div>
                        
                            <div class="col">
                                <div class="">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        {{-- <img src="img/product.webp" alt="" srcset="" class="img3"> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- data lelang-->
     <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Auction Data</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$lelang}}</div>
                    </div>
                    <div>
                        {{-- <img src="img/lelang.png" alt="" srcset="" class="img4"> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- data riwayat lelang -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Auction History</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$riwayat}}</div>
                    </div>
                    <div>
                        {{-- <img src="img/riwayat.png" alt="" srcset="" class="img2"> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- laporan -->
   

    
@endsection
