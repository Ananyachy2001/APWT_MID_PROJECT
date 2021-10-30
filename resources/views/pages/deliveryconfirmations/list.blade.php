@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Delivery man ID</th>
            <th>Order id</th>
            <th>Delivery Status</th>
            <th>Delivery Time</th>
        </tr>
        @foreach($deliverycons as $deliverycon)
            <tr>
                <td>{{$delivery->Dman_id}}</td>
                <td>{{$delivery->Order_id}}</td>
                <td>{{$delivery->D_Status}}</td>
                <td>{{$delivery->D_time}}</td>
                <td><a href="/delivery/edit/{{$delivery->id}}/{{$delivery->name}}">Edit</a></td>
                <td><a href="/delivery/delete/{{$delivery->id}}/{{$delivery->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@endif