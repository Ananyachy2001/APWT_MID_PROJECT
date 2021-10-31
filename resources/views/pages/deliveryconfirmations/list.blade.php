
@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <table class="table table-borded">
        <tr>
            <th>Order Id</th>
            <th>Payment price</th>
            <th>DMan Username</th>
            <th>Delivery Status</th>
            <th>Delivery Time</th>
        </tr>
        @foreach($deliverys as $delivery)
            <tr>
                <td>{{$delivery->Ord_id}}</td>
                <td>{{$delivery->Pay_price}}</td>
                <td>{{$delivery->D_username}}</td>
                <td>{{$delivery->D_Status}}</td>
                <td>{{$delivery->D_time}}</td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection

