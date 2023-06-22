<x-header data="help page component"  />
<h2>logged in as {{auth()->user()->name}}</h2>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}



a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


<div class="card" style="margin-top:40px">
  <img src="data:image/png;base64,{{$data->profile_image}}" alt="John" style="width:50%"/>
  <h1>{{$data->name}}</h1>
  <h1>{{$data->email}}</h1>
 
  {{-- <h1>{{$data->categories}}</h1> --}}
  @php
     $categories= json_decode($data->categories)
    
  @endphp
     @foreach($categories as $cat)
      {{-- <div class="td" style="font-size: 20px"> --}}
         
          {{$loop->first?'':','}}
          <td >{{$cat}}</td>
      {{-- </div> --}}
     @endforeach 

  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>

    <button><a href={{"edit/".$data->id}}>Edit profile</a></button>
</div>

</body>
</html>



























<!-- <form>
  <div class="row">
    <div class="col-4" style="margin-center">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <br>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
  </div>
  <br>
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-4 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->


