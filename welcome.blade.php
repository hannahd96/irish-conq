<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Irish Conqueror</title>

        <!-- Styles -->
		<link rel="stylesheet" type="text/css" href="video/main.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:900" rel="stylesheet">
 
	<style>
		body{
			background-color:#40bf40 !important;
		}
		

		
	</style>
	
	
    </head>
	@extends('layouts.app')

	@section('content')
	<body>
	
		<div class = "container">
			<div class="row">
				<div class = "col-md-1"><!--KEEP ME EMPTY--></div>
						@if (Route::has('login'))
							<div class="top-left links">
								
							</div>
							<div class="top-right links">
								@auth
									<a href="{{ url('/home') }}">Home</a>
								@else
									<!--<a href="#">Leaderboards</a>-->
									<!--<a href="#">Settings</a>-->
									<!--<a href="{{ route('login') }}">Login</a>
									<a href="{{ route('register') }}">Register</a>-->
								@endauth
							</div>
						@endif

				
				<!-- BACKGROUND VIDEO -->
					<div class="fullscreen-bg">
						<video loop muted autoplay poster="video/videoframe_new.png" class="fullscreen-bg__video">
							<source src="video/hvid.mp4" type="video/mp4">
						</video>
					</div>
					<div class = "row" style = "margin-top:50px; text-align:center;">
						<div class="title m-b-md">
							<a href="{{ route('login') }}" class="btn btn-sm animated-button victoria-three">Play Now</a>
						</div>	
					</div>
					<div class = "row" style = "margin-top:4px; ">
						<div class="title m-b-md" style="text-transform: uppercase;
														font-family: Catamaran, sans-serif; ">
							<h3 style = "color:white; text-align:center;"><b>a trivia battle game for the counties of Ireland. <br><br> whoever claims the most counties wins!</b></h3>
						</div>	
					</div>
				
			</div>
			<div class = "col-md-1">
				<!--KEEP ME EMPTY-->
			</div>
		</div>
		</div>
	</body>
	<footer style = "margin-left:20px;"> <!--IrishConqueror&copy; --></footer>
</html>
@endsection