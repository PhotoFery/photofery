@extends('backend.layouts.master')
@section('content')
@include('backend.partials.message')
<div class="form-body">
        <h3 class="text-center">Messages List</h3>
        @if(count($messagelists) > 0)  
    <table class="table  table-responsive">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($messagelists as $message)
    <tr>
      <th scope="row">{{ $message->id }}</th>
      <td>{{ $message->name }}</td>
      <td>{{ $message->email }}</td>
      <td>{{ $message->message }}</td>
      <td>
       <form action="{{ route('messagedelete',$message->id) }}" method="post">
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