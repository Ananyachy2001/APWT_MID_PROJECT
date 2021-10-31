@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<h1>Add Ctegory</h1>
<form action="{{route('category.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="c_name" value="{{old('c_name')}}" class="form-control">
            @error('c_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <span>Description</span>
            <input type="text" name="c_desc" value="{{old('c_desc')}}" class="form-control">
            @error('c_desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            
        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Add Category" ></li>
        </div>
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif

    @endsection