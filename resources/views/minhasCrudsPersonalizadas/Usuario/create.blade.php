@extends('layouts.app') 
 |@section('title','Create') 
 |@section('content') 
 | 
 <div class='container'>
 <div class='row'>
 <div class='col-md-10 col-md-offset-1'>
 <div class='panel panel-default'>
 <div class='panel-body'>
 <div class='col-md-12'>
 <form id='saveForm' class='form-horizontal' role='form' method='POST' action='{{route("cruds.usuario.store")}}' enctype='multipart/form-data'>
 {{ csrf_field() }}
 <div class='form-group'>
 <label for='' class='col-md-4 control-label'></label>
 <div class='col-md-6'>
 <button class='btn btn-info'>Adicionar</button>
 </div>
 </div>
 </form>