
 <!-- horizontal -->
  
 <div class='container'>
  	 <div class='row'> 
  		<div class='col-xs-12'>
 
 		<h1>All<small>(horizontal) <a href='{{route("cruds.usuario.create")}}'><span class='glyphicon glyphicon-plus pull-right'></span></small></a></h1> 
 			<div id='masterDiv'>
 			@foreach($usuarios as $usuario)
 			<div class='rowDiv'>
 			<div class='insideDiv'> <h6>{{$usuario->id}}</h6></div>
 			<div class='insideDiv'> <h6>{{$usuario->teste}}</h6></div>
 			<div class='insideDiv text-right'>
  			<a href='{{route('cruds.usuario.show',$usuario->id)}}' class='btn btn-info'><span class='glyphicon glyphicon-eye-open'></span></a>
  			<a href='{{route('cruds.usuario.edit',$usuario->id)}}' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a>
  			<a href='#' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
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
 		<h1>All<small>(vertical)<small></h1>
 
 			@foreach($usuarios as $usuario)
 			<div class='col-xs-3 card'>
 			 <h5> {{$usuario->id}}</h5>
 			 <h5> {{$usuario->teste}}</h5>
 			<div class='text-center'>
 			<a href='{{route('cruds.usuario.show',$usuario->id)}}' class='btn btn-info'><span class='glyphicon glyphicon-eye-open'></span></a>
 			<a href='{{route('cruds.usuario.edit',$usuario->id)}}' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a>
 			<a href='#' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
 			</div> 
 			<br>
 </div>
 			@endforeach 
 		</div> 
  	</div> 
 </div>
 @endsection