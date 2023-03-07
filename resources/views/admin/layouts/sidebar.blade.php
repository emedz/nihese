<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">LELANG<sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link {{Request::is('dashboard')? 'active': ''}}" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span><i class="bi bi-house"></i> Dashboard</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    
</div>

<!-- Nav Item - data user -->
<li class="nav-item">
    <a class="nav-link {{($title === "about") ? 'active' : ''}}" href="/datauser">
        <i class="fas fa-fw fa-chart-area"></i>
        <span><i class="bi bi-people"></i> User Data</span></a>
</li>

<!-- Nav Item - data petugas -->
<li class="nav-item">
    <a class="nav-link {{($title === "DataPetugas") ? 'active' : ''}}" href="/datapetugas">
        <i class="fas fa-fw fa-chart-area"></i>
        <span><i class="bi bi-person"></i> Officer Data</span></a>
</li>

<!-- Nav Item - data barang -->

<li class="nav-item">
    <a class="nav-link {{Request::is('datauser')? 'active': ''}}" href="/dataproduk">
        <i class="fas fa-fw fa-chart-area"></i>
        <span><i class="bi bi-box-seam"></i> Inventory</span></a>
</li>

<!-- Nav Item - data lelang-->
<li class="nav-item">
    <a class="nav-link {{($title === "Datalelang") ? 'active' : ''}}" href="/lelang">
        <i class="fas fa-fw fa-chart-area"></i>
        <span><i class="bi bi-shop-window"></i> Auction Data</span></a>
</li>


<!-- Nav Item - data riwayat lelang -->
<li class="nav-item">
    <a class="nav-link {{Request::is('datauser')? 'active': ''}}" href="/riwayat">
        <i class="fas fa-fw fa-table"></i>
        <span><i class="bi bi-repeat"></i> Auction History</span></a>
</li>

 <!-- Nav Item - data laporan -->
 <li class="nav-item">
    <a class="nav-link {{Request::is('datauser')? 'active': ''}}" href="/laporan" target="_blank">
        <i class="fas fa-fw fa-table"></i>
        <span><i class="bi bi-file-earmark-ruled"></i> Report</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">



