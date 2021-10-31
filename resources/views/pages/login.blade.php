@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post">
	
	{{@csrf_field()}}

	</div>
            <span>User Name</span>
            <input type="text" name="u_username" value="{{old('u_username')}}" class="form-control">
            @error('u_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

		</div>
            <span>password</span>
            <input type="password" name="u_password" value="{{old('u_password')}}" class="form-control">
            @error('u_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
	<input type="submit" name="" value="Login">
</form>
@endsection