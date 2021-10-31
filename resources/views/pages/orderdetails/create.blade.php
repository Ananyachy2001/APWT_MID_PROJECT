@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <form action="{{route('orderdetail.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        

       <div>
            <span>Order ID</span>

           <select name="order_id">
            <option value="0" disable="true" selected="true">Select</option>
            @foreach($myorders as $myorder)
            <option value="{{$myorder->id}}">{{$myorder->id}}</option>
            @endforeach
           </select>

            @error('order_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

            <span>Product Name</span>
            <input type="text" name="p_name" value="{{old('p_name')}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        </div>
            <span>Product Price</span>
            <input type="text" name="p_price" value="{{old('p_price')}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Product Category</span>
            <input type="text" name="p_categories" value="{{old('p_categories')}}" class="form-control">
            @error('p_categories')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Product Quantity</span>
            <input type="text" name="p_quantity" value="{{old('p_quantity')}}" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Product Total Price</span>
            <input type="text" name="p_tprice" value="{{old('p_tprice')}}" class="form-control">
            @error('p_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Product Size</span>
            <input type="text" name="p_size" value="{{old('p_size')}}" class="form-control">
            @error('p_size')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Username</span>
            <input type="text" name="u_username" value="{{old('u_username')}}" class="form-control">
            @error('u_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Order Now" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection