
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lelang | {{$title}}</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


<div class="wrapper">
    <link rel="stylesheet" href="css/style.css">
    <div class="logo">
        <img src="/img/logo-removebg-preview.png" alt="">
    </div>
    <div class="text-center mt-3 name" style="margin-bottom:6px;">
        Lelang
    </div>
      <!--success register-->
    @if(session()->has('success'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
    <!--mesage eror-->
    @error('login_gagal')
       <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
  @enderror
  <!-- form input-->
    <form class="p-3 mt-2" action="{{url('login')}}" method="POST">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="username" id="username" placeholder="Username" autofocus required value={{old('username')}}>
            @error('username')
                <div class="invalid-feedback">
                    username salah
        
                  </div>
            @enderror
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        <font size="2px">Don't have an account?</font><a href="/register">Register</a>
    </div>
    <div class="mt-3 card-footer text-center text-muted" style="font-size: 10px">
        Copyright By Kelompok2 RPL SMK DA
      </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

