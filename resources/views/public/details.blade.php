@extends('layouts.main')
@section('content')
<table border='1'>
<tr>
    <th align ='center' colspan="2">Public Details</th>
</tr>
<tr>
@foreach($publics as $pub)
<th>Id:</th>
<td>{{$pub->id}}</td>
@endforeach
</tr>
<tr>
@foreach($publics as $pub)
<th>Name:</th>
<td>{{$pub->name}}</td>
@endforeach
</tr>
<tr>
@foreach($publics as $pub)
<th>Type:</th>
<td>{{$pub->type}}</td>
@endforeach
</tr>
<tr>
@foreach($publics as $pub)
<th>Password:</th>
<td>{{$->password}}</td>
@endforeach
</tr>
</table>
@endsection