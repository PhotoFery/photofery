@extends('backend.layouts.master')
@section('content')
@include('backend.partials.message')
<div class="form-body">
        <h3 class="text-center">Admin List</h3>
        @if(count($imagesliderlists) > 0)
    <table class="table image-backend  table-responsive">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($imagesliderlists as $imageslider)
    <tr>
      <th scope="row">{{ $imageslider->id }}</th>
      <td><img src="{{asset('public/images/slider').'/'. $imageslider->image}}" alt=""></td>
      <td> 
       <form action="{{ route('imagesliderdelete',$imageslider->id) }}" method="post">
         @csrf
         <button class="edit-a-delete" type="submit">Delete</button>
        </form>
      </td>      
    </tr>
    @endforeach
    

  </tbody>
</table>
@else 
    <p>Data not found</p>
    @endif
    </div>
@endsection