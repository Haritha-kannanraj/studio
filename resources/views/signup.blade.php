@extends('master')
@section('content')
<div class="navbar">
  <button type="button" class="button1"><a href="{{url('back')}}">Back</a></button>
</div>
<div class="signup-wrapper">
  <form action="signup" method="POST" class="form">
    @csrf
    <h2>SignUp Page</h2>
    <div class="control">
      <input type="text" name="fname" id="fname" required/>
      <label for="fname"><i class="fa fa-user"> First Name</i></label>
    </div>
    <div class="control">
      <input type="text" name="lname" id="lname" required/>
      <label for="lname"><i class="fa fa-user"> Last Name</i></label>
    </div>
    <div class="control">
      <input type="email" name="email" id="email" required/>
      <label for="email"><i class="fa fa-paper-plane"> E-Mail ID</i></label>
    </div>
    <div class="control">
      <input type="text" name="mobile" id="mobile" pattern="[0-9]{10}" required/>
      <label for="mobile"><i class="fa fa-mobile"> Mobile Number</i></label>
    </div>
    <div class="control">
      <input type="password" name="password" id="password" required/>
      <label for="password"><i class="fa fa-lock"> Password</i></label>
    </div>
    <input type="submit" value="Sign In" class="submit-btn" />
</form>
  </div>
</div>
@endsection
