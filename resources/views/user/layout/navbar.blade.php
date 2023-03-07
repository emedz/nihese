<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LELANG | {{$title}}</title>
    <link rel="stylesheet" href="style.css">

        <!-- Font Awesome -->
        <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
        />
        <!-- MDB -->
        <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img
                src="/img/logo-removebg-preview.png"
                height="35px"
                class="px-4"
                alt="Lelang Logo"
                loading="lazy"
                />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="/homeuser">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/home">Product</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/riwayatuser">Auction History</a>
                </li>
               
            </ul>
            <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
            <!-- Icon -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit"><img src="/img/search.svg" alt="" srcset="" style="opacity: 50%"></button>
              </form>

              <form action="{{url('logout')}}" method="post">
                @csrf
                <button type="submit" class="dropdown-item " onclick="return confirm('Are you sure?')">
                    <img class="img px-4" src="/img/log-out.svg" alt="" srcset="">
                </button>
              </form>

           
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->

            @yield('content')
</body>
</html>
