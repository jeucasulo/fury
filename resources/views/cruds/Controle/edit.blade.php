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
@section('title','Edit') 
@section('content') 

 <div class='container'>
 <div class='row'>
 <div class='col-md-10 col-md-offset-1'>
 <div class='panel panel-default'>
 <div class='panel-body'>
 <div class='col-md-12'>
 <form id='updateForm' class='form-horizontal' role='form' method='POST' action='{{route("cruds.controle.update", $id)}}' enctype='multipart/form-data'>
 <input type='hidden' name='_method' value='put'>
 {{ csrf_field() }}<!-- --------------------------------name-------------------------------- -->
 <div class='form-group{{ $errors->has("name") ? " has-error" : "" }}'>
 	<label for='name' class='col-md-4 control-label'>Name</label>
 	<div class='col-md-6'>
 		<input id='name' type='text' class='form-control' name='name' value='{{$controle->name}}'/>
 		@if ($errors->has("name"))
 			<span class='help-block'>
 				 <strong>{{ $errors->first("name") }}</strong>
 			 </span>
 		@endif 
 	</div>
 </div>
 <!-- --------------------------------/name-------------------------------- -->
 <!-- --------------------------------test-------------------------------- -->
 <div class='form-group{{ $errors->has("test") ? " has-error" : "" }}'>
 	<label for='test' class='col-md-4 control-label'>Test</label>
 	<div class='col-md-6'>
 		<input id='test' type='text' class='form-control' name='test' value='{{$controle->test}}'/>
 		@if ($errors->has("test"))
 			<span class='help-block'>
 				 <strong>{{ $errors->first("test") }}</strong>
 			 </span>
 		@endif 
 	</div>
 </div>
 <!-- --------------------------------/test-------------------------------- -->
 
 <div class='form-group'>
 <label for='' class='col-md-4 control-label'>{{$id}}</label>
 <div class='col-md-6'>
 <button class='btn btn-success'>Atualizar</button>
 <a href='{{route("cruds.controle.index")}}' class='btn btn-info'>Voltar</a>
 <br><br>
 </form>
 </div>
 </div>
 </div> 
 </div> 
 </div> 
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

