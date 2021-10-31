@extends('layouts.app')
@section('content')
    <h1>Home Page</h1>
    @if(Session::get('user_id')) 

<h3>User ID:  {{Session::get('user_id')}}  </h3>

<h3>User Name:  {{Session::get('user_name')}}  </h3>

 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection