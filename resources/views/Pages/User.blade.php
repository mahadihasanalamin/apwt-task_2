@extends('Layouts.app')
@section('content')
    <div class = 'col-md-4'>
        <table class = 'table table-bordered'>
            <tr>
                <th>ID:</th>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <th>Name:</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>DOB:</th>
                <td>{{$user->dob}}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{$user->address}}</td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>{{$user->phone}}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th>Username:</th>
                <td>{{$user->username}}</td>
            </tr>
        </table>
    </div>
   
@endsection