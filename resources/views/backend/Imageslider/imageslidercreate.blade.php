@extends('backend.layouts.master')
@section('content')
@include('backend.partials.message')

     
 <div class="form-body">       
  <h3 class="text-center">Image Slider</h3>
        
  <form action="{{ route('imageslidercreateprocess')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
      
          <input type="file" name="image" class="form-control" id="name" placeholder="Enter name">
        </div>
         <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Upload Image</button>
      </div>
    </form>
  </div>
    
@endsection