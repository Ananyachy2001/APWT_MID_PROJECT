@extends('layouts.staffapp')
@section('content')
<h1>Add Ctegory</h1>
<form action="{{route('insertcategory')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <span>Description</span>
            <input type="text" name="desc" value="{{old('desc')}}" class="form-control">
            @error('desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            
        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Add Category" ></li>
        </div>
    </form>

    @endsection