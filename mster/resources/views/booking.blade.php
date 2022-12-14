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
	<div id="booking" class="section">
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
						
						<form action="/book1" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">date</span>
										<input class="form-control" type="date" required name="check_in" value="@if(session('check_in')){{date('d/m/Y', strtotime(session('check_in')))}}@endif" >
										@error('check_in')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

									</div>
								</div>
								
					<p>	{{date('d/m/Y', strtotime(session('check_in')))}}</p>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" type="date" required name="check_out">
										@error('check_out')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults</span>
										<select class="form-control" name="adults">
											@if(session('adults'))
											<option>{{session('adults')}}</option>
											@endif
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										@error('adults')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Children</span>
										<select class="form-control" name="children">
											@if(session('children'))
											<option>{{session('children')}}</option>
											@endif
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										@error('children')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							{{-- <div class="form-group">
								<span class="form-label">Room Type</span>
								<select class="form-control" required>
									<option value="" selected hidden>Select room type</option>
									<option>Private Room (1 to 2 People)</option>
									<option>Family Room (1 to 4 People)</option>
								</select>
								<span class="select-arrow"></span>
							</div> --}}
							<div class="form-btn">
								<button class="submit-btn" type="submit">Check availability</button>
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

