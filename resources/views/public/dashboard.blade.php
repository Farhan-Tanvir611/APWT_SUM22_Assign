@extends('layouts.main')
@section('content')
<h1>Welcome to dash board</h1>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Type</th>

    </tr>
    @foreach($publics as $pub)
        <tr>
            <td>{{$pub->id}}</td>
            <td><a href="{{route('public.details',['id'=> $pub -> id])}}">{{$pub->name}}</a></td>
            <td>{{$pub->password}}</td>
            <td>{{$pub->type}}</td>
        </tr>
    @endforeach
</table> 
@endsection