@extends('Layouts.app')
@section('content')
    <div class ='col-md-4'>
        <table class ='table table-bordered'>
            <tr>
                <th>Name</th>
                <td>{{$contact->name}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$contact->phone}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$contact->email}}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{$contact->message}}</td>
            </tr>
        </table>
    </div>
@endsection