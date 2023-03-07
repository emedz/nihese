@extends('admin.layouts.layout')

@section('dashboard')
<form method="POST" action="{{route('lelang.update',$lelang->id_lelang)}}"  class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <label for="id" class="form-label">Status</label>
    <select class="form-select" aria-label="Default select example" id="status" name="status">

        <option selected>{{$lelang->status}}</option>
        <option>winner</option>
        <option>Participation</option>
       
      
      </select>
      <button type="submit" class="btn btn-primary mt-3">Change</button>
</form>
@endsection