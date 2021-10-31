@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))

<h1>Edit Category</h1>
<form action="{{route('category.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="c_name" value="{{$category->C_name}}" class="form-control">
            @error('c_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Description</span>
            <input type="text" name="c_desc" value="{{$category->C_desc}}" class="form-control">
            @error('c_desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            
            


        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Edit" ></li>
        </div>
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif

    @endsection