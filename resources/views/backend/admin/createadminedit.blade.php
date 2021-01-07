@extends('backend.layouts.master')
@section('content')
@include('backend.partials.message')
<div class="form-body">
        <h3 class="text-center">Update Admin</h3>
        <form action="{{ route('createadminupdate', $createadminlists->id)}}" method="post">
      @csrf
      <div class="form-group">
      
          <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ $createadminlists->name }}">
        </div>
        <div class="form-group">
      
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $createadminlists->email }}">
        </div>
        <div class="form-group">
     
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
       
          <input type="password" name="c_password" class="form-control" id="password" placeholder="Confirm Password">
        </div>
         <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Update Admin</button>
      </div>
    </form>
  </div>

@endsection