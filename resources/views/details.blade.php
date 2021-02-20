@extends('master')
@section('content')
<table border = "1">
<tr>
<td>Id</td>
<td>Event Name</td>
<td>Description</td>
<td>Start Time</td>
<td>End Time</td>
<td>Category</td>
<td>Category</td>
</tr>
@foreach($users as $val)
<tr>
<td>{{$val->id}}</td>
<td>{{$val->ename}}</td>
<td>{{$val->dis}}</td>
<td>{{$val->stime}}</td>
<td>{{$val->etime}}</td>
<td>{{$val->cat}}</td>
 {{-- {{dd($val->filenames)}} --}}
{{-- json_decode($val->filenames) --}}
@foreach(explode(',', $val->filenames) as $path)
  <td><img src="{{ asset('/files/'. $path)}}" width="100px;" height="100px;"alt="Image"</td>
@endforeach

<td><a href='acce/{{$val->id}}'><button>See</button></a></td>
</tr>
@endforeach
</table>
@endsection
