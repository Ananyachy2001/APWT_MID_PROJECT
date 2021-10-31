
@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<form action="{{route('orderdetail.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$orderdetail->id}}">
        <div class="col-md-4 form-group">
        
            <input type="hidden" name="order_id" value="{{$orderdetail->order_id}}" class="form-control">
            @error('order_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Product name</span>
            <input type="text" name="p_name" value="{{$orderdetail->P_name}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product price</span>
            <input type="text" name="p_price" value="{{$orderdetail->P_price}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Category</span>
            <input type="text" name="p_categories" value="{{$orderdetail->P_categories}}" class="form-control">
            @error('p_categories')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Quantity</span>
            <input type="text" name="p_quantity" value="{{$orderdetail->P_quantity}}" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Total Price</span>
            <input type="text" name="p_tprice" value="{{$orderdetail->P_tprice}}" class="form-control">
            @error('p_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Size</span>
            <input type="text" name="p_size" value="{{$orderdetail->P_size}}" class="form-control">
            @error('p_size')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Username</span>
            <input type="text" name="u_username" value="{{$orderdetail->U_username}}" class="form-control">
            @error('u_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
      
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection
