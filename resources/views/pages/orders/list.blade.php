@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Product Price</th>
            <th>Payment Type</th>
            <th>Order Status</th>
        </tr>
        @foreach($myorders as $myorder)
            <tr>
                <td>{{$order->O_id}}</td>
                <td>{{$order->user_id}}</td>
                <td>{{$order->U_username}}</td>
                <td>{{$order->P_tprice}}</td>
                <td>{{$order->Paymenttype}}</td>
                <td>{{$order->O_status}}</td>
                <td><a href="/myorder/edit/{{$order->id}}/{{$order->name}}">Edit</a></td>
                <td><a href="/myorder/delete/{{$order->id}}/{{$order->name}}">Cancel Order</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@endif