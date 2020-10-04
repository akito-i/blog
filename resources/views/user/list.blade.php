@extends('layouts.app2')

@section('content')
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
@foreach($users as $user)

<table class="table table-bordered">
  <thead>
    <tr>
    <th style="width:10%">id</th>
    <th style="width:10%">name</th>
    <th style="width:10%">age</th>
    <th style="width:10%">place</th>
    <th style="width:10%">language</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href="/show/{{$user->id}}">{{$user->id}}</a></th>
      
      <td>{{ $user->name }}</td></a>
      
      <td>{{ $user->age }}</td>
      <td>{{ $user->place  }}</td>
      <td>{{ $user->language  }}</td>
    </tr>
  </tbody>
</table>

@endforeach
@endsection