@extends('admin.layouts.layout')

@section('dashboard')

<h1>Create New User</h1>

      <form method="POST" action="/datauser">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">

          @error('name')
          <div class="invalid-feedback">
            {{$message}}
            @enderror

        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{old('username')}}">

          @error('username')
          <div class="invalid-feedback">
            {{$message}}
            @enderror

        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">

          @error('email')
          <div class="invalid-feedback">
            {{$message}}
            @enderror

        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control @error('') is-invalid @enderror" id="password" name="password" value="{{old('')}}">
        </div>
        
        
        <button type="submit" class="btn btn-primary mt-3">Add User</button>
      </form>

@endsection