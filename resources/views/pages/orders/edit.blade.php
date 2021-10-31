
@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<form action="{{route('order.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$orders->id}}">
        <div class="col-md-4 form-group">
            <span>Order ID</span>
            <input type="text" name="O_id" value="{{$orders->O_id}}" class="form-control">
            @error('O_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>User ID</span>
            <input type="hidden" name="user_id" value="{{$orders->user_id}}" class="form-control">
            @error('user_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Username</span>
            <input type="text" name="U_username" value="{{$orders->U_username}}" class="form-control">
            @error('U_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="P_tprice" value="{{$orders->P_tprice}}" class="form-control">
            @error('P_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Payment Type</span>
            <input type="text" name="Paymanttype" value="{{$orders->Paymanttype}}" class="form-control">
            @error('Paymanttype')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Order Status</span>
            <input type="text" name="O_status" value="{{$orders->O_status}}" class="form-control">
            @error('O_status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
      
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection
