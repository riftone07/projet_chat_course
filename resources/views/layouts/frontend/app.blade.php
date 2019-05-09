<!DOCTYPE HTML>
<html lang="fr">
<head>
	<title>Ememory</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="{{ asset('frontend/common-css/bootstrap.css') }} " rel="stylesheet">

	<link href="{{ asset('frontend/common-css/swiper.css') }} " rel="stylesheet">


	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
		.star-rating div {
			display: inline-block;
			font-size: 15px;
			-webkit-transition: all .3s ease-in-out;
			transition: all .3s ease-in-out;
			cursor: pointer;
		}
		.star-yellow,
		.star-rating div:hover,
		.star-rating div:hover ~ div {
			color: #f2b600
		}
	</style>
	@yield('css')
</head>
<body >


	@include('layouts.frontend.header')
	
	@yield('content')

	
	@include('layouts.frontend.footer')
	<!-- SCIPTS -->

	<script src="{{ asset('frontend/common-js/jquery-3.1.1.min.js') }}"></script>

	<script src="{{ asset('frontend/common-js/tether.min.js') }}"></script>

	<script src="{{ asset('frontend/common-js/bootstrap.js') }}"></script>

	<script src="{{ asset('frontend/common-js/swiper.js') }}"></script>

	<script src="{{ asset('frontend/common-js/scripts.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	  {!! Toastr::message() !!}
	@yield('scripts')
</body>
</html>
