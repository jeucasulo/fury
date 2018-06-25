@extends('fury.master')

@section('title', 'Configuração')
@section('jsFile', '../js/config.js')
@section('cssFile', '../css/index.css')



@section('content')
    @parent
    


    <div id="" class="container-fluid text-center">
    	<div id="" class="row ">
    		<div id="" class="col-12">
    			
    			<h3 class="text-muted">Diretórios</h3>
    <hr>
    		</div>
    	</div>
    </div>
    <br>
    <div class="container">
    	<div class="row">
    		<div class="col-12">
    <!-- 			<h1>Inserir menu de cores</h1>
    			<h1 title="fodaci">Configuração</h1>
    			<hr>
     -->			

    		
    			<p>Routes: 
    				<div class="row">
    					<div class="col-sm"><input type="text" id="routesPath" name="routesPath" class="form-control" /></div>
    					<div class="col-sm"><button id="resetRoutes" class="btn btn-primary resetBtn">Restaurar padrão</button></div>
    					<div class="col-sm sr-only"><label id="defaultRoutesPath"></label></div>
    				</div>
    			</p>

    			<p>Controller: 

    				<div class="row">
    					<div class="col-sm"><input type="text" id="controllerPath" name="controllerPath" class="form-control" /></div>
    					<div class="col-sm"><button id="resetRoutes" class="btn btn-primary resetBtn">Restaurar padrão</button></div>
    					<div class="col-sm sr-only"><label id="defaultControllerPath"></label></div>
    				</div>

    				<!-- <input type="text" id="controllerPath" name="controllerPath" class="form-control" />
    				Padrão: &nbsp<label id="defaultControllerPath"></label> -->
    			</p>
    			<p>Model: 

    				<div class="row">
    					<div class="col-sm"><input type="text" id="modelPath" name="modelPath" class="form-control" /></div>
    					<div class="col-sm"><button id="resetRoutes" class="btn btn-primary resetBtn">Restaurar padrão</button></div>
    					<div class="col-sm sr-only"><label id="defaultModelPath"></label></div>
    				</div>

    <!-- 				<input type="text" id="modelPath" name="modelPath" class="form-control"	/>
    				Padrão: &nbsp<label id="defaultModelPath"></label>
     -->
    			</p>
    			<p>Request: 

    				<div class="row">
    					<div class="col-sm"><input type="text" id="requestPath" name="requestPath" class="form-control" /></div>
    					<div class="col-sm"><button id="resetRoutes" class="btn btn-primary resetBtn">Restaurar padrão</button></div>
    					<div class="col-sm sr-only"><label id="defaultRequestPath"></label></div>
    				</div>

    <!-- 				<input type="text" id="requestPath" name="requestPath" class="form-control"/>
    				Padrão: &nbsp<label id="defaultRequestPath"></label>
     -->			
    			</p>
    			<p>Views:

    				<div class="row">
    					<div class="col-sm"><input type="text" id="viewsPath" name="viewsPath" class="form-control" /></div>
    					<div class="col-sm"><button id="resetRoutes" class="btn btn-primary resetBtn">Restaurar padrão</button></div>
    					<div class="col-sm sr-only"><label id="defaultViewsPath"></label></div>
    				</div>

    <!-- 				<input type="text" id="viewsPath" name="viewsPath" class="form-control" />
    				Padrão: &nbsp<label id="defaultViewsPath"></label>
     -->			
    			</p>
    			<!-- <h1 class="text-center">Views</h1> -->


    			
    		</div>
    	</div>
    </div>

    <br>
    <div id="" class="container-fluid text-center">
    	<div id="" class="row ">
    		<div id="" class="col-12">
    <hr>			
    			<h3 class="text-muted">Views</h3>
    <hr>
    		</div>
    	</div>
    </div>
    <br>


    <div id="" class="container">
    	<div id="" class="row">
    		<div id="" class="col-12">

    			<h4 class="text-muted">Nav</h4>
    			<div>		
    				<textarea id="navOutput" name="navOutput" class="form-control"></textarea>
    			</div>
    <br>
    			<h4 class="text-muted">Footer</h4>
    			<div>
    				<textarea id="footerOutput" name="footerOutput" class="form-control"></textarea>
    			</div>

    <!-- 			<hr>
    			<h1>Import</h1>
    			<p>Bootstrap local <input type="checkbox" name=""></p> 
    			<p>Bootstrap cdn <input type="checkbox" name=""></p> 
    			<p>Jquery local <input type="checkbox" name=""></p> 
    			<p>Jquery cdn <input type="checkbox" name=""></p> 
    			<p>Bootstrap templates <input type="checkbox" name=""></p> 
     -->


    		</div>
    	</div>
    </div>
    <br>
    <br>
    <div id="" class="container-fluid text-center">
    	<div id="" class="row">
    		<div id="" class="col-12">
    			<form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveForm">
    				{{ csrf_field() }}

    				<input id="jsonConfigOutput" name="jsonConfigOutput" type="text" class="sr-only"></input>
    			</form>
    			

    			<button type="button" id="updateConfig" class="btn btn-success">Atualizar configuração</button>


    		</div>
    	</div>
    </div>

    <style type="text/css">
    	input{
    		min-width: 300px;
    	}
    </style>

  @endsection

