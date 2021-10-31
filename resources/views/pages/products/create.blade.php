@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <form action="{{route('product.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Product Id</span>
            <input type="text" name="p_id" value="{{old('p_id')}}" class="form-control">
            @error('p_id')
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
            <span>Category ID</span>

           <select name="cat_id">
            <option value="0" disable="true" selected="true">Select</option>
            @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->C_name}}</option>
            @endforeach
        </select>
           
            @error('cat_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Quantity</span>
            <input type="number" name="p_quantity" value="{{old('p_quantity')}}" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Details</span>
            <input type="text" name="p_details" value="{{old('p_details')}}" class="form-control">
            @error('p_details')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
      
            <span>Product Image 1</span>
            <input type="text" name="p_img1" value="default.jpg" class="form-control">
            @error('p_img1')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
      
      <span>Product Image 2</span>
      <input type="select" name="p_img2" value="default.jpg" class="form-control">
      @error('P_img2')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
  <div>
      
      <span>Product Image 3</span>
      <input type="select" name="p_img3" value="default.jpg" class="form-control">
      @error('p_img3')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
        <input type="submit" class="btn btn-success" value="Add Product" >
    </form>

    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection