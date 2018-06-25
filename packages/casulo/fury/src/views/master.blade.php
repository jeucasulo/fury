<!DOCTYPE html>
<html lang=”pt-br”>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>@yield('title')</title>
	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" > -->
	
	<!-- Bootstrap Bootswatch Theme-->
<!-- 	
 	<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/spacelab/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" crossorigin="anonymous">
 -->	

 	<!-- bootstrap bootswatch theme -->
 	<link rel="stylesheet" href="{{asset('css/bootswatch-lux-bootstrap4.min.css')}}" crossorigin="anonymous">
	
	<link href="@yield('cssFile')" rel="stylesheet">

	<body>
		<div class="se-pre-con"></div>
		<section id="myNavBar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand float" href="#">Fury</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse " id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			        <a class="nav-link" href="{{route('fury.tables')}}">Tabelas<span class="sr-only">(current)</span></a>
			        <a class="nav-link" href="{{route('fury.generate')}}">Personalize<span class="sr-only">(current)</span></a>
			        <a class="nav-link" href="{{route('fury.config')}}">Configurações<span class="sr-only">(current)</span></a>
			        <a class="nav-link" href="#">Instruções<span class="sr-only">(current)</span></a>

			        
			    </form>
			  </div>
			</nav>
		</section>

			@section('content')
			    <!-- This is the master sidebar. -->
			@show


			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			
			<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
			<!-- <script src="js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script> -->

			<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
			<script src="{{asset('js/jquery.min.js')}}"></script>

			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
			<script src="{{asset('js/popper.min.js')}}"  crossorigin="anonymous"></script>
			<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
			<script src="{{asset('bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"  crossorigin="anonymous"></script>

			<script src="@yield('jsFile')"></script>

	</body>


</head>