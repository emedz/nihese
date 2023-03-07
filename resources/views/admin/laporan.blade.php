<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex justify-content-center">
    <img src="/img/logo-removebg-preview.png" style="width: 150px" alt="" srcset="">
    </div>
    <h3 class="text-center mb-5">Auction Result Report</h3>
    <h5>Printed By</h5>
    <h6>admin</h6>
    <div class="px-4 mt-5">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Gmail</th>
            <th scope="col">Product</th>
            <th scope="col">Auction Date</th>
            <th scope="col">Starting Price</th>
            <th scope="col">Bargaining Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($lelangs->where('status','winner') as $item)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->users->name}}</td>
            <td>{{$item->users->email}}</td>
            <td>{{$item->produks->name_produk}}</td>
            <td>{{$item->produks->tanggal_lelang}}</td>
            <td>{{$item->produks->harga_awal}}</td>
            <td>{{$item->penawaran_harga}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    window.print();
    </script>
  </body>
</html>
