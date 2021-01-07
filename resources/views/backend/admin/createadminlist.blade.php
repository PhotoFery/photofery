@extends('backend.layouts.master')
@section('content')
@include('backend.partials.message')
<div class="form-body">
        <h3 class="text-center">Admin List</h3>
        
    <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($createadminlists as $createadminlist)
    <tr>
      <th scope="row">{{ $createadminlist->id }}</th>
      <td>{{ $createadminlist->name }}</td>
      <td>{{ $createadminlist->email }}</td>
      <td>
        @if($createadminlist->id != 5)
        <div class="d-flex justify-content-start">
        <a class="edit-a-edit mr-4" href="{{ route('createadminupdate',$createadminlist->id) }}">Edit</a> 
      
<form action="{{ route('createadmindelete',$createadminlist->id) }}" method="post">
  @csrf
  <button class="edit-a-delete" type="submit">Delete</button>
</form>
</div>
 @endif 
  </td>      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    
@endsection