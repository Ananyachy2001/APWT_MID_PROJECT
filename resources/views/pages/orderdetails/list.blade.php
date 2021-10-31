
@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Total Price</th>
            <th>Product Size</th>
            <th>Username</th>
        </tr>
        @foreach($orderdetails as $order)
            <tr>
                <td>{{$order->order_id}}</td>
                <td>{{$order->P_name}}</td>
                <td>{{$order->P_price}}</td>
                <td>{{$order->P_categories}}</td>
                <td>{{$order->P_quantity}}</td>
                <td>{{$order->P_tprice}}</td>
                <td>{{$order->P_size}}</td>
                <td>{{$order->U_username}}</td>
                <td><a href="/orderdetail/edit/{{$order->id}}/{{$order->order_id}}">Edit</a></td>
                <td><a href="/orderdetail/delete/{{$order->id}}/{{$order->order_id}}">Cancel Order</a></td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection

