@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <form action="{{route('admin.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="u_name" value="{{old('u_name')}}" class="form-control">
            @error('u_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
            <span>Phone</span>
            <input type="text" name="u_phone" value="{{old('u_phone')}}" class="form-control">
            @error('u_phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Address</span>
            <input type="text" name="u_address" value="{{old('u_address')}}" class="form-control">
            @error('u_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Username</span>
            <input type="text" name="u_username" value="{{old('u_username')}}" class="form-control">
            @error('u_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Email</span>
            <input type="text" name="u_email" value="{{old('u_email')}}" class="form-control">
            @error('u_email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Password</span>
            <input type="password" name="u_password" value="{{old('u_password')}}" class="form-control">
            @error('u_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>User Type:</span>
        <select name="usertype" id="">
            <option value="" disable="true" selected="true">Select</option>
            <option value="Admin">Admin</option>
            <option value="Staff">Staff</option>
            <option value="Delivery man">Delivery man</option>
        </select>
            @error('usertype')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>
      
      <span>Profile Picture</span>
      <input type="text" name="u_profileimg" value="default.jpg" class="form-control">
      @error('u_profileimg')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
        <input type="submit" class="btn btn-success" value="Sign Up" >
    </form>

    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif

    
@endsection