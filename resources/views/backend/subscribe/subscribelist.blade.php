@extends('backend.layouts.master')
@section('content')
@include('backend.partials.message')
<div class="form-body">
        <h3 class="text-center">Client Subscribes List</h3>
        @if(count($subscribelists) > 0)   
    <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach ($subscribelists as $subscribe)
    <tr>
      <th scope="row">{{ $subscribe->id }}</th>
      <td>{{ $subscribe->subscribe_phone }}</td>
      <td>
      
      
<form action="{{ route('subscribedelete',$subscribe->id) }}" method="post">
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