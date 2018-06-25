@extends('fury.master')

@section('title', 'Tabelas')
@section('jsFile', asset("").'js/tables.js')
@section('cssFile', asset("").'css/index.css')



@section('content')
    @parent
    
    <br>
    <div id="" class="container">
    	<div id="" class="row">
    		<div id="" class="col-12">
    			<button id="createNewTableModalBtn" class="btn btn-block btn-info">Criar nova tabela</button>
    		</div>
    	</div>
    </div>
    <br>
    

    <div id="" class="container">
    	<div id="" class="row">
    		
    		<div id="" class="col-12 text-center">
    			<p hidden="hidden">{{$publicPath = public_path('')}}</p>

          <?php
    			if ($handle = opendir($publicPath.'/fury-files/tables')) {
    			    // echo "Manipulador de diretório: $handle\n";
    			    // echo "Arquivos:\n<br>";
    				$i = 0;
    			    /* Esta é a forma correta de varrer o diretório */
    			    while (false !== ($file = readdir($handle))) {
    			        if(strlen($file)>2){

    			        	$file = str_replace(".json","",$file); //hides the .json extension

    			        	echo "<div class='text-center border'>";
    			        	// echo "<h5  class='tableFiles showTable  text-center' role='alert'>";
    			        	echo "<button id='".$i."' type='button' class='btn btn-block btn-primary tableFiles showTable'>";
    			        	echo $file;
    			        	echo "</button>";
    			        	// echo "</h5>";
    			        	echo "<div class='hide-table' id='divTable".$i."'>";
                echo "<div class='row'>";
                  echo "<div class='col'>";
                  echo "<button id='".$file."' type='button' class='btn btn-block btn-success set-name'>Alterar nome</button>";
                  echo "</div>";
                  
                  echo "<div class='col'>";
      						echo "<button id='".$file."' type='button' class='btn btn-block btn-danger set-name'>Deletar</button>";
                  echo "</div>";
    						echo "</div>";
    			        	echo "</div>";
    			        	echo "</div>";
    			        	// echo "</br>";

    			        	// echo '</tbody>';
    			        	$i++;
    			        }

    			    }
    			}else{
    			    echo $_SERVER['REQUEST_URI'].'tables';
    			    echo $handle;
    			}
    			?>
    		</div>
    	</div>
    </div>
    	

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>
     -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insira o novo nome </h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="form-group">
    	      <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveForm">
    	      							{{ csrf_field() }}

    	        <input type="text" name="oldFileName" id="oldFileName" class="form-control sr-only" style="min-width: 100% !important" />
    	        <input type="text" name="newFileName" id="newFileName" class="form-control" style="min-width: 100% !important" />
    	        <p class='text-danger text-center'>Não use caracteres especiais!</p>
    	      </form>
          </div>
          <div class="modal-body">

          	

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Descartar</button>
            <button id="saveNewTableName" type="button" class="btn btn-success">Salvar alterações</button>
          </div>
        </div>
      </div>
    </div>





    <!-- Modal -->

    <div class="modal fade" id="createNewTableModal" tabindex="-1" role="dialog" aria-labelledby="createNewTableModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createNewTableModalLabel">Nome da nova tabela</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="form-group">
    	      <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="createTable">
    	        {{ csrf_field() }}
    	        <input type="text" name="newTable" id="newTable" class="form-control" style="min-width: 100% !important" />
    	        <p class='text-danger text-center'>Não use caracteres especiais!</p>
    	      </form>
          </div>
          <div class="modal-body">

          	

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Descartar</button>
            <button id="createNewTable" type="button" class="btn btn-success">Criar tabela</button>
          </div>
        </div>
      </div>
    </div>


    <script>
        // "global" vars, built using blade
        var assetPath = '{{ asset('') }}';
    </script>



@endsection

