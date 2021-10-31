
@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Product Price</th>
            <th>Payment Type</th>
            <th>Order Status</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->O_id}}</td>
                <td>{{$order->user_id}}</td>
                <td>{{$order->U_username}}</td>
                <td>{{$order->P_tprice}}</td>
                <td>{{$order->Paymanttype}}</td>
                <td>{{$order->O_status}}</td>
                <td><a href="/order/edit/{{$order->id}}/{{$order->O_id}}">Edit</a></td>
                <td><a href="/order/delete/{{$order->id}}/{{$order->O_id}}">Cancel Order</a></td>
            </tr>
        @endforeach
    </table>

    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection

