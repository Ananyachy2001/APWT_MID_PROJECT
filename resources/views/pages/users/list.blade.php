@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>User Type</th>
            <th>User Profile Picture</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->usertype}}</td>
                <td>{{$user->profileimg}}</td>
            </tr>
        @endforeach
    </table>
@endsection