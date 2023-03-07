@extends('admin.layouts.layout')

@section('dashboard')
<a href="/datauser/create" class="btn btn-secondary mb-3">Add User</a>

@if(session()->has('gagah'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('gagah')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
@if(session()->has('success'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
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
          <th scope="col">Email</th>
          <th scope="col">Username</th>
          <th scope="col">Level</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
         
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->username}}</td>
          <td>{{$user->level}}</td>
          <td>{{$user->created_at}}</td>
          <td>
            <button class="btn border-0 btn-warning"><a href="{{route('datauser.edit', $user->id)}}"><img src="/img/edit.svg" class="logo" alt="" srcset=""></a></button>
            <form action="{{ route('datauser.destroy',$user->id) }}" method="post" class="d-inline">
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