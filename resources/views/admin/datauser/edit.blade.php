@extends('admin.layouts.layout')

@section('dashboard')

<h1>Edit User</h1>

{{-- <div class="col-lg-8">
    <form method="POST" action="{{route('datauser.update',$user->id)}}"  class="mb-5">
        @method('put')
        @csrf
        <div class=" mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">

          @error('name')
          <div class="invalid-feedback">
            {{$message}}
            @enderror
        
          </div>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{$user->username}}">

          @error('username')
          <div class="invalid-feedback">
            {{$message}}
            @enderror

        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">

          @error('email')
          <div class="invalid-feedback">
            {{$message}}
            @enderror
     
        <button type="submit" class="btn btn-primary mt-3">Edit User</button>
      </form>
</div> --}}

  <form method="POST" action="{{route('datauser.update',$user->id)}}"  class="mb-5">
      @method('put')
      @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">

    @error('name')
    <div class="invalid-feedback">
      {{$message}}
      @enderror

  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{$user->username}}">

    @error('username')
    <div class="invalid-feedback">
      {{$message}}
      @enderror

  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">

    @error('email')
    <div class="invalid-feedback">
      {{$message}}
      @enderror

  </div>
 
  <button type="submit" class="btn btn-primary mt-3">Edit User</button>
</form>

    
@endsection