@extends('master')
@section('content')
<div class="navbar">
  <button type="button" class="button1"><a href="{{url('back')}}">Back</a></button>
</div>
<div class="login-wrapper">
  <form action="login" method="POST" class="form">
    @csrf
    <h2>Login Page</h2>
    <h4>Please Login to Your Account....</h4>
    <div class="control">
      <input type="text" name="email" id="email" required/>
      <label for="email"><i class="fa fa-user"> UserID (Email-ID)</i></label>
    </div>
    <div class="control">
      <input type="password" name="password" id="password" required/>
      <label for="password"><i class="fa fa-lock"> Password</i></label>
    </div>
    <input type="submit" value="Login" class="submit-btn" />
    <a href="#forgot-password" class="forgot-psw">Forgot Password?</a>
  </form>
  <div id="forgot-password">
    <form action="" class="form">
      <a href="#" class="close">&times;</a>
      <h2>Reset Password</h2>
      <div class="control">
        <input type="email" name="email" id="email" required/>
        <label for="email"><i class="fa fa-paper-plane"> User email-id</i></label>
      </div>
      <input type="submit" value="Submit" class="submit-btn"/>
    </form>
  </div>
</div>
@endsection
