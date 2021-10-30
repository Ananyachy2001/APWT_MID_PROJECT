@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post">
	
	{{@csrf_field()}}
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="" value="Login">
</form>
@endsection