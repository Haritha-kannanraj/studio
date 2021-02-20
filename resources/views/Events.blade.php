<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Events</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/events.css') }}"> --}}
       <style>
       html, body {
height: 100%;
width: 100%;
margin: 0;
padding: 0;
background-color: #BDC3C7;
font-family: 'Raleway';
}
.top {
 background-color: #36b567;
 height: 450px;
 margin:0;
 padding:0;
 box-shadow: 2px 2px 4px rgb(0, 0, 0, .25);
}

.f {
 height: 1000px;
 width: 400px;
 margin: -110px auto;
 border-radius: 10px;
 color: #666;
 padding: 0px 0px;
 box-shadow: 2px 2px 4px rgb(0, 0, 0, .25);
}

.info {
 padding: 10px;
}

h1, h2, p {
 text-align: center;
 padding: 0px;
 margin: 5px 5px;
}

h2 {
 font-family: 'Great Vibes', cursive;
 font-weight: 100;
}

p.line {
 margin: 0px auto 20px auto;
 color: #999;
}
margin: 0px auto 20px auto;
.form input {
 font-size: 15px;
 color: #666;
 padding: 6px;
 margin: 25px auto 20px;
 display: block;
 width: 75%;
}

input:focus {
 outline: 0;
}

.button button {
 display: inline-block;
 width: 100px;
}
button {
 color: #666;
 border: none;
 font-family: 'Raleway';
 font-size: 18px;
 font-weight: 600;
 padding: 15px 32px;
 width: 189px;
 margin: 20px auto 0px auto;
 float:left;
}

button.accept {
background-color:#3f8c08;
 border-radius: 0px 0px 0px 10px;
 border-right: solid 1px #cc919a;
}

button.regret {
  background-color:#eb213f;
 border-radius: 0px 0px 10px 0px;
 border-right: solid 1px #cc919a;
}

button:hover {
 background-color:#abdae0;
 transition: .5s;
}

button:focus {
 outline: 0;
}
</style>
    </head>
    <body>
      <div class="top">
      </div>
        <div class="f">
          <div class ="info">
          <h1>THE</h1>
          <h2>{{$users[0]->ename}}</h2>

            <p class= "line">
          _________________________________</p><br><br>
            <h2>The Details</h2>
            <p>{{$users[0]->stime}}</p>
            <p>{{$users[0]->etime}}</p>
            <br>
            <h2>{{$users[0]->dis}}</h2>
            <p>The Park</p>
            <p>7, Mahatma Gandhi Rd,Karnataka,560042</p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9680899320642!2d77.6174511141303!3d12.973892790854384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae169ca8334f21%3A0x2f71ab422db4f935!2sThe%20Park%20Bangalore!5e0!3m2!1sen!2sin!4v1612344904547!5m2!1sen!2sin" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </p>     <p class= "line">
          _________________________________</p>

          <form action="../onc/{{$users[0]->ename}}" method="post" class="form" enctype="multipart/form-data">
            @csrf
            <button class ="accept">Accept</button>
          </form>
          <button class ="regret">Regret</button>
      </div>

</div>

    </body>
</html>
