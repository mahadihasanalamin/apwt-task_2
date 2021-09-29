@extends('Layouts.app')
@section('content')
    <div class = 'container'>
        <form action = "{{route('contact')}}" method = 'POST'>
            {{csrf_field()}}
            <h1>Contact us</h1>
            <div class = 'col-md-2 form-group'>
                <span>Name</span>
                <input type = 'text' name = 'name' value = "{{old('name')}}" class = 'form-control'>
                @error('name')
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
                <span>Write Your Message</span>
                <input type = 'text' name = 'message' value = "{{old('message')}}" class = 'form-control'>
            </div>
            <input type = 'submit' vlaue = 'Send' class = 'btn btn-success'>
        </form>
    </div>
@endsection