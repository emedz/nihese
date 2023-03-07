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
        <div class="text-center mt-2 name" style="margin-bottom:1px;">
            Lelang
        </div>
        <form class="p-3 mt-2" action="{{url('register')}}" method="post">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name"  id="name" placeholder="Name"  value="{{old('name')}}">
                
                @error('name')
                <div class="invalid-feedback">
        
                  </div>
                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input  type="text" name="username" id="username" placeholder="Username" required value="{{old('username')}}">
            </div>
            <form class="p-3 mt-3">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="email" name="email" id="email" placeholder="Email" required value="{{old('email')}}">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="password" placeholder="Password" required >
                </div>
            <button class="btn mt-3">Register</button>
        </form>
        <div class="text-center fs-6">
            <font size="2px">have an account?</font><a href="/login">Login</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>    
