@extends('master')
@section('content')
<div class="navbar">
  @if(Session::has('user'))
  <button type="button" class="button1"><a href="/logout"> Logout </a></button>
  @else
  <button type="button" class="button1"><a href="/login"> Login </a></button>
  @endif
</div>
<div class="container">
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
<form action="store" method="POST" class="form" enctype="multipart/form-data">
  @csrf
  <h2>Event Creation Form</h2>
  <div class="control">
    <input type="text" name="ename" id="ename" required/>
    <label for="ename"><i class="fa fa-user">Event Name</i></label>
  </div>
  <div class="control">
  <textarea name="dis" id="dis" height="100px"  width="200px" style="resize:none"></textarea><br>
  <label for="dis"><i class="fa fa-user">Discribtion</i></label>
  </div>
    <div class="control">
      <input type="datetime-local" name="stime" id="stime" required/>
      <label for="stime"><i class="fa fa-user">Start Date & Time</i></label>
    </div>
    <div class="control">
      <input type="datetime-local" name="etime" id="etime" required/>
     <label for="etime"><i class="fa fa-user">End Date & Time</i></label>
  </div>
  <div class="control">
    <label for="cat">Choose a Category:</label><br>
<select name="cat" id="cat">
  <option value="arts">Arts & Culture</option>
  <option value="commerce">Chamber of Commerce</option>
  <option value="club">Clubs&Organization</option>
  <option value="community">Community Service</option>
  <option value="edu">Education</option>
  <option value="govt">Government</option>
  <option value="celeb">Festivals & Celebration</option>
  <option value="sport">Sports</option>
  <option value="relig">Religious Events</option>
  <option value="busi">Business</option>
  <option value="other">other</option>
</select>
</div>
<div class="control">
        <input type="file" name="filenames[]" class="myfrm form-control" id="filenames[]">

          <input type="file" name="filenames[]" class="myfrm form-control" id="filenames[]">
        </div>
    <button type="submit" class="submit-btn"  value="event In" style="margin-top:10px">Submit</button>
</form>
@endsection
