<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>




@extends('layouts.app') 
@section('title','Index') 
@section('content') 

 <!-- horizontal -->
  
 <div class='container'>
  	 <div class='row'> 
  		<div class='col-xs-12'>
 
 		<h1>All<small>(horizontal)</small><a href='{{route("cruds.controle.create")}}'><b>+</b></a></h1> 
 			<div id='masterDiv'>
 			@foreach($controles as $controle)
 			<div class='rowDiv'>
 			<div class='insideDiv'> <h6>{{$controle->id}}</h6></div>
 			<div class='insideDiv'> <h6>{{$controle->name}}</h6></div>
 			<div class='insideDiv'> <h6>{{$controle->test}}</h6></div>
 			<div class='insideDiv text-right'>
  			<a href='{{route("cruds.controle.show",$controle->id)}}' class='btn btn-info'>Ver</a>
  			<a href='{{route("cruds.controle.edit",$controle->id)}}' class='btn btn-success'>Editar</a>
  			<a href='#' class='btn btn-danger'>Excluir</a>
  			</div>
 			</div>
 			@endforeach 
 			</div>
  		</div> 
 	</div> 
 </div> 
 <br><br><br>
 <!-- vertical -->
  
 
 <div class='container'> 
  	<div class='row'> 
  		<div class='col-xs-12'>
 		<h1>All<small>(vertical)<small><a href='{{route("cruds.controle.create")}}'><b>+</b></a></h1>
 
 			@foreach($controles as $controle)
 			<div class='col-xs-3 card'>
 			 <h5> {{$controle->id}}</h5>
 			 <h5> {{$controle->name}}</h5>
 			 <h5> {{$controle->test}}</h5>
 			<div class='text-center'>
 			<a href='{{route("cruds.controle.show",$controle->id)}}' class='btn btn-info'>Ver</a>
 			<a href='{{route("cruds.controle.edit",$controle->id)}}' class='btn btn-success'>Editar</a>
 			<a href='#' class='btn btn-danger'>Excluir</a>
 			</div> 
 			<br>
 </div>
 			@endforeach 
 		</div> 
  	</div> 
 </div>
 @endsection
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
  </body>
</html>

