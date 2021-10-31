@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<html >
<head>
    <title></title>
</head>
<body>
    <form action="{{'admin.create'}}" method="post">
{{csrf_field()}}
<div>
            <span>Name:</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>
<div>
            <span>Phone-Number:</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>


<div>
            <span>Address:</span>
            <input type="text" name="address" value="{{old('address')}}" class="form-control">
            @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>

<div>
            <span>Username:</span>
            <input type="text" name="username" value="{{old('username')}}" class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>
<div>
            <span>Email:</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>
<div>
            <span>Password:</span>
            <input type="password" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>

<br>

<div>
            <span>User Type:</span>
            <input type="text" name="usertype" value="admin" class="form-control">
            @error('usertype')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>


<div>
            <span>User Profile Picture:</span>
            <input type="text" name="profileimg" value="default.png" class="form-control">
            @error('profileimg')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>


<input type="submit" class="btn btn-success" name="Register">

</form>
    
</body>
</html>
<a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif

@endsection