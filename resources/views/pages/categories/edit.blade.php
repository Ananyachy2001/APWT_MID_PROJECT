@extends('layouts.staffapp')
@section('content')
<form action="{{route('editCat')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$cate->id}}">
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{$cate->name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Description</span>
            <input type="text" name="desc" value="{{$cate->desc}}" class="form-control">
            @error('desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            
            


        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Edit" ></li>
        </div>
    </form>

    @endsection