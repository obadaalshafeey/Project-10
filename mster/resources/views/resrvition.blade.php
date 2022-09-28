@extends('layout.master')
@section('content')
@section('css','reservation.css')
<!-- CSS only -->


  

<br><br><br><br><br><br><br><br>
<h3 class="container">{{$data->name}} </h3>
<br>
<p class="container" style="font-weight: bold" >{{$data->des}}.</p>


<div class="card-group container">
  @foreach ($data2 as $img)
      
    <div class="card">
      <img style="height: 50vh" src={{$img->img_link}} class="card-img-top" alt="..." >
     
    </div>
   
    @endforeach

  
  
  </div>

  <br>
 <p class="container">  two bedrooms <br>
   one bathroom <br>
    one Living room</p>
<br>
     <hr class="container">
<br>
<h5 style="text-align:center ";>The services that this place provides

</h5>
<br><br>
<br>
<div class="container"  style=" text-align: center;">
  @foreach ($data3 as $serv)
      
    <p> <i  class="{{$serv->service_icons}}"></i> {{$serv->service_name}}</p>
    
    
    @endforeach

   

</div>

    <div class="bradcumbContent">
                               
                            
               
    
  <div class="center">
     <a href="{{ url('/book1' )}}"><button type="button" class="btn btn-secondary">resrvition</button></a>
</div>
     <style>
      .center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;

  
}

     </style>
 
@endsection