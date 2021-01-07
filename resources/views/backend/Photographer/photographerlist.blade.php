@extends('backend.layouts.master')
@section('content')
@include('backend.partials.message')
<div class="form-body">
        <h3 class="text-center">Photographers List</h3>
      @if(count($photographerlists) > 0 )  
    <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($photographerlists as $photographer)
    <tr>
      <th scope="row">{{ $photographer->id }}</th>
      <td>{{ $photographer->name }}</td>
      <td>{{ $photographer->phone }}</td>
      <td>{{ $photographer->email }}</td>
      <td>
<form action="{{ route('photographerdelete',$photographer->id) }}" method="post">
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