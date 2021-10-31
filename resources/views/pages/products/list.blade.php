
@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <table class="table table-borded">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Category ID</th>
            <th>Product Quantity</th>
            <th>Product Details</th>
            <th>Product Image 1</th>
            <th>Product Image 2</th>
            <th>Product Image 3</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->P_id}}</td>
                <td>{{$product->P_name}}</td>
                <td>{{$product->P_price}}</td>
                <td>{{$product->Cat_id}}</td>
                <td>{{$product->P_quantity}}</td>
                <td>{{$product->P_details}}</td>
                <td>{{$product->P_img1}}</td>
                <td>{{$product->P_img2}}</td>
                 <td>{{$product->P_img3}}</td>
                <td><a href="/product/edit/{{$product->id}}/{{$product->P_name}}">Edit</a></td>
                <td><a href="/product/delete/{{$product->id}}/{{$product->P_name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection

