@extends('master')
@section('content')
<div class="login-wrapper">
<form action='accept' method="POST" class="form" enctype="multipart/form-data">
  @csrf
  @if (count($errors) > 0)
  <div class="alert alert-danger">
      <strong>Sorry!</strong> Here have some issue please check<br><br>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
  </div>
  @endif
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control form-control-lg" id="name" name="name"  placeholder="Enter name">
</div>
  <div class="form-group">
    <label for="ppl">No of people:</label>
    <input type="number" class="form-control form-control-lg" id="ppl"name="ppl" placeholder="no of people"  step="1">
</div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="event" name="event" value="event">
    @if(!empty($users))
    <label class="form-check-label" for="event" >{{$users[0]->ename}}</label>
    @endIf
  </div>
  <button type="submit" class="btn btn-primary" style:"text-align:centre;">Submit</button>
</form>
</div>
@endsection
