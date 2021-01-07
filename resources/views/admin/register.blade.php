@extends('admin.layouts.master')
@section('content')
<div class="login">
	<div class="container">
  
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
          @include('admin.partials.message')
        <h3 class="text-center">Register</h3>
        <form action="{{ route('register')}}" method="post">
      @csrf
      <div class="form-group">
      
          <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
      
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
     
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
       
          <input type="password" name="c_password" class="form-control" id="password" placeholder="Confirm Password">
        </div>
         <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Register</button>
      </div>
    </form>
      </div>
    </div>
		
	</div>
</div>
@endsection