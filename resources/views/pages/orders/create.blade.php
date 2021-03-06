@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <form action="{{route('order.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Order ID</span>
            <input type="text" name="O_id" value="{{old('O_id')}}" class="form-control">
            @error('O_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div>
            <span>User ID</span>

           <select name="user_id">
            <option value="0" disable="true" selected="true">Select</option>
            @foreach($systemusers as $systemuser)
            <option value="{{$systemuser->id}}">{{$systemuser->id}}</option>
            @endforeach
            </select>
            @error('user_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Username</span>
            <input type="text" name="U_username" value="{{old('U_username')}}" class="form-control">
            @error('U_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Price</span>
            <input type="text" name="P_tprice" value="{{old('P_tprice')}}" class="form-control">
            @error('P_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Payment Type</span>
            <input type="text" name="Paymanttype" value="{{old('Paymanttype')}}" class="form-control">
            @error('Paymanttype')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Order Status</span>
            <input type="text" name="O_status" value="{{old('O_status')}}" class="form-control">
            @error('O_status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Order Now" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection