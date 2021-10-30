@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name:</th>
            <th>Phone Number:</th>
            <th>Address:</th>
            <th>Username:</th>
            <th>Email</th>
            <th>User Type</th>
            <th>User Image</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->U_name}}</td>
                <td>{{$user->U_phone}}</td>
                <td>{{$user->U_address}}</td>
                <td>{{$user->U_username}}</td>
                <td>{{$user->U_email}}</td>
                <td>{{$user->Usertype}}</td>
                <td>{{$user->U_profileimg}}</td>
                <td><a href="/admin/edit/{{$user->id}}/{{$user->name}}">Edit</a></td>
                <td><a href="/admin/delete/{{$user->id}}/{{$user->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@endif