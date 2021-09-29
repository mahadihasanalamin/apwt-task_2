@extends('Layouts.app')
@section('content')
    <div class = 'container'>
        <form action = "{{route('login')}}" method = 'POST'>
            {{csrf_field()}}
            <h1>Login</h1>
            @if(Session::has('fail'))
                <div class = 'col-md-2 alert alert-danger'>{{Session::get('fail')}}</div>
            @endif
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
            <input type = 'submit' value = 'Login' class = 'btn btn-success'>
        </form>
    </div>
@endsection