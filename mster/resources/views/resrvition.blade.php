@extends('layout.master')
@section('content')

<br><br><br><br><br><br><br><br>
<h3 class="container">{{$data->name}} </h3>
<br>
<p class="container" style="font-weight: bold" >{{$data->des}}.</p>


<div class="card-group container">
  @foreach ($data2 as $img)
      
    <div class="card">
      <img src={{$img->img_link}} class="card-img-top" alt="...">
     
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
<div class="container" style="position: absolute; right: -250px;">
  @foreach ($data3 as $serv)
      
    {{$serv->service_name}} <i   class="{{$serv->service_icons}}"></i>
    
    
    @endforeach

   

</div>






    <!-- ##### Breadcumb Area Start ##### -->
        <div class="bradcumbContent">
                               
                            
               
                                   <a href="{{ url('/book1' )}}" ><div style="margin-left:60% ;">   <button type="submit">resrvition</button></div></a> 













@endsection