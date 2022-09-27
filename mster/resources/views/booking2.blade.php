@php
    use Carbon\Carbon;
@endphp

@extends('layout.master')

@section('content')


<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	{{-- <link type="text/css" rel="stylesheet" href="{{ asset("/./css/bootstrap.min.booking.css") }}" /> --}}

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset("/./css/style.booking.css") }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}

</head>

<body>
	<div id="booking" class="section mt-5">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Make your reservation</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
							</div>
						</div>
						
						<form action="/book22" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										
								<form action="/book22" method='post'>
   @csrf
   <span class="form-label">Avaliable Room</span>
   @if(Session::get('data'))
    <p style='display:none'>{{$a=Session::get('data')}}</p>
    @endif
    @foreach($data as $i)
    <p style='display:none'>{{$c=true}}</p>
    @if(Session::get('data'))
    @foreach ($a as $b)
    {{-- <p>{{$b->room_id }} roa</p>
    
    <p>{{ $i->id }} roa1</p> --}}

    @if($b->rooms_id == $i->id)
    <p style='display:none'>{{$c=false}}</p>
    @endif
   
      @endforeach
      @endif
      @if($c == true)
      <div class="">
    @if(session('rooms_id')== $i->id)
    <input class="form-check-input" type="radio" name="rooms_id" id="exampleRadios1" value="{{$i->id}}" checked >
        <label class="form-check-label" for="exampleRadios1">
       {{ $i->id}}  {{ $i->name}}
        </label>
     
       @else
      
        <input class="form-check-input" type="radio" name="rooms_id" id="exampleRadios1" value="{{$i->id}}" >
        <label class="form-check-label" for="exampleRadios1">
       {{ $i->id}}  {{ $i->name}}
        </label> @endif
        @error('rooms_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

      </div>
      <div>
        <p style='display:none'>
         {{$diff =Carbon::parse(session('check_out'))->diffInDays(Carbon::parse(session('check_in')));}} </p>
        <label for="">price</label>
        <input type="text" disabled value='{{$diff*$i->price}}' name='price_{{$i->id}}' >
      </div>
      
      @endif
      @endforeach

									</div>
								</div>
								
					
							</div>
							<div class="row">
							
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Payment Method</span> <br>
                    @if(session('payment')=='cash')
                    <input class="form-check-input mr-2" type="radio" name="payment" id="exampleRadios1" value="cash" checked >
                    <label class="form-check-label mr-2" for="exampleRadios1"> cash
                    </label> <br>
                       @else
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash" >
                    <label class="form-check-label" for="exampleRadios1">
                     cash
                    </label> <br> @endif
               
            
                    @if (session('payment')=='online')
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="online" checked>
                    <label class="form-check-label" for="exampleRadios2">
                      online
                    </label><br>
                   @else
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="online">
                    <label class="form-check-label" for="exampleRadios2">
                      online
                    </label><br> @endif
                    @error('payment')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror</option>
										</select>
							
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
				

							<div class="form-btn">
								<button class="submit-btn" type="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

		
	
</body>

</html>


@endsection




