@extends('backend.master')

@section('content')


<div class="container-fluid px-4">

<h1 class="mt-4">User Details </h1>
<ol class="breadcrumb mb-4">
</ol>

<ol class="breadcrumb mb-2">
</ol>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
  @foreach($usercollection as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td> {{$user->name}}</td>
      <td> {{$user->email}}</td>
      <td> {{$user->status}}</td>

    </tr>

@endforeach
  </tbody>
</table>










</div>
@endsection
