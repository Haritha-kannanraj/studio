@extends('master')
@section('content')
<div class="hero">
  <div class="navbar">
   <form action="#" method="post">
     <button type="button" class="abc"> <a href="{{url("loginp")}}">Login</a></button>
   </form>
   <form action="#" method="post">
     <button type="button"><a href="{{url("signup")}}">SignUp</a></button>
   </form>


  </div>
  <div class="content">
    <small>Welcome to our</small>
    <h1>Worlds<br />Events Studio</h1>
    <button type="button">Take a Tour</button>
  </div>
  <div class="side-bar">
    <img src="{{asset("/assets/images/menu.png")}}" class="menu">
    <div class="social-links">
      <img src="{{asset("/assets/images/fb.png")}}" />
      <img src="{{asset("/assets/images/ig.png")}}" />
      <img src="{{asset("/assets/images/tw.png")}}" />
    </div>
    <div class="useful-links">
      <img src="{{asset("/assets/images/share.png")}}" />
      <img src="{{asset("/assets/images/info.png")}}" />
    </div>
  </div>
  <div class="bubbles">
    <img src="{{asset("/assets/images/bubble.png")}}" />
    <img src="{{asset("/assets/images/bubble.png")}}" />
    <img src="{{asset("/assets/images/bubble.png")}}" />
    <img src="{{asset("/assets/images/bubble.png")}}" />
    <img src="{{asset("/assets/images/bubble.png")}}" />
    <img src="{{asset("/assets/images/bubble.png")}}" />
  </div>
</div>
@endsection
