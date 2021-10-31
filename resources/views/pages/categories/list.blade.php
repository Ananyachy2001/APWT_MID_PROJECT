@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))

    <h1>Category page</h1>
    <table class="table" border='2'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>    
        </thead>
        @foreach($categories as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->C_name}}</td>
            <td>{{$item->C_desc}}</td>
            <td><a href="/category/edit/{{$item->id}}/{{$item->C_name}}">Edit</a></td>
            <td><a href="/category/delete/{{$item->id}}/{{$item->C_name}}">Delete</a></td>
    </td>
    </tr>
        
    @endforeach
        <tbody>
    </tbody>
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif

@endsection