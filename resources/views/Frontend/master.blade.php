
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/assets/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/assets/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/assets/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/assets/css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{url('/frontend/assets/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{url('/frontend/assets/css/style.css')}}"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    </head>
	<body>
		@include('Frontend.Fixed.header')
			<section class="m-3 container">
				@yield("content")
			</section>
			<section class="m-3 container">
				@yield("products")
			</section>
		@include('Frontend.Fixed.footer')
		<script src="{{url('/frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{url('/frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{url('/frontend/assets/js/slick.min.js')}}"></script>
		<script src="{{url('/frontend/assets/js/nouislider.min.js')}}"></script>
		<script src="{{url('/frontend/assets/js/jquery.zoom.min.js')}}"></script>
		<script src="{{url('/frontend/assets/js/main.js')}}"></script>
			@yield("scripts")
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			
	</body>
</html>
