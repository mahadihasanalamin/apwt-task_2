@extends('Layouts.app')
@section('content')
    <div class = 'container'>
        <form action = "{{route('registration')}}" method = 'POST'>
            {{csrf_field()}}
            <h1>Registration</h1>
            <div class = 'col-md-2 form-group'>
                <span>Name</span>
                <input type = 'text' name = 'name' value = "{{old('name')}}" class = 'form-control'>
                @error('name')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <div class = 'col-md-2 form-group'>
                <span>DOB</span>
                <input type = 'date' name = 'dob' value = "{{old('dob')}}" class = 'form-control'>
                @error('dob')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <div class = 'col-md-2 form-group'>
                <span>Address</span>
                <input type = 'text' name = 'address' value = "{{old('address')}}" class = 'form-control'>
                @error('address')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <div class = 'col-md-2 form-group'>
                <span>Phone</span>
                <input type = 'text' name = 'phone' value = "{{old('phone')}}" class = 'form-control'>
                @error('phone')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <div class = 'col-md-2 form-group'>
                <span>Email</span>
                <input type = 'text' name = 'email' value = "{{old('email')}}" class = 'form-control'>
                @error('email')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <div class = 'col-md-2 form-group'>
                <span>Username</span>
                <input type = 'text' name = 'username' value = "{{old('username')}}" class = 'form-control'>
                @error('username')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <div class = 'col-md-2 form-group'>
                <span>Password</span>
                <input type = 'password' name = 'password' value = "{{old('password')}}" class = 'form-control'>
                @error('password')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <div class = 'col-md-2 form-group'>
                <span>Confirm Password</span>
                <input type = 'password' name = 'confirmpassword' value = "{{old('confirmpassword')}}" class = 'form-control'>
                @error('confirmpassword')
                    <span class = 'text-danger'>{{$message}}</span>
                @enderror
            </div>
            <input class = 'btn btn-success' type = 'submit' value = 'Register'>
        </form>
    </div>    
@endsection