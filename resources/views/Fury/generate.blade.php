@extends('fury.master')

@section('title', 'Custom')
@section('jsFile', asset("").'js/generate.js')
@section('cssFile', asset("").'css/generate.css')

@section('content')
    @parent
    
  <div id="hiddenLabels" class="container">
    <div id="" class="row">
      <div id="" class="col-12-xs">
        <label id="table_name_label"></label><br>
        <label id="table_singular_label"></label><br>
        <label id="table_plural_label"></label><br>
        <label id="table_id"></label><br>
        <label id="currentTableStaticShort" name="currentTableStaticShort"></label><br>
        <label id="totalColumns" name="totalColumns" class="badge badge-primary"></label><br>
      </div>
    </div>
  </div>

  <div id="tutorialJson">
    <p><a href="http://api.jquery.com/jquery.getjson/" target="_blank">Base</a></p>
    <p><a href="https://stackoverflow.com/questions/14060271/jquery-getjson-and-each-looping-through-child-array-not-linked-to-parent-index?rq=1" target="_blank">Looping nests</a></p>
  </div>


  <section id="tableSection">
    <div class="container">
      <div class="row">
        <div class="col-sm">
            <!-- INDEX -->
            
            <!-- <h1>Table</h1> -->
            <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveForm">
              {{ csrf_field() }}

              <div class="form-group">

              <!-- Numero de colunas: <label id="totalColumns"></label> -->
              <p><span id="lastIdSpan">(LastId:<span id="lastId"></span>)</span></p>
              Tabela
              <select id="currentTable" name="currentTable" class="form-control-sm">
              <?php
              if ($handle = opendir('../public/fury-files/tables')) {
                  // echo "Manipulador de diretório: $handle\n";
                  echo "Arquivos:\n<br>";

                  /* Esta é a forma correta de varrer o diretório */
                  while (false !== ($file = readdir($handle))) {
                      if(strlen($file)>2){
                      echo "<option>$file</option><";
                      }
                  }
              }else{
                  echo $_SERVER['REQUEST_URI'].'tables';
                  echo $handle;
              }
              ?>
              </select>

              <span>Nome: </span><input type="text" id="tableName" name="tableName" class='form-control-sm' />&nbsp&nbsp&nbsp&nbsp
              <span>Singular: </span><input type="text" id="tableSingular" name="tableSingular" class='form-control-sm' />&nbsp&nbsp&nbsp&nbsp
              <span>Plural: </span><input type="text" id="tablePlural" name="tablePlural" class='form-control-sm' />&nbsp&nbsp&nbsp&nbsp
              <span>Id: </span><input type="text" id="tableId" name="tableId" class='form-control-sm' />&nbsp&nbsp&nbsp&nbsp

              
              &nbsp&nbsp&nbsp&nbsp
              <button type="button" id="addNewCOlumn" class="btn btn-info float-sm-right">+ Coluna</button>
              <br>
              Arquivo:<label id="currentTableStatic"></label>

              <hr>
              <div id="header_fields" class="row text-center">
                <div class="col-custom"><b>Display Name</b></div>
                <div class="col-custom"><b>Html hame</b></div>
                <div class="col-custom"><b>Html type</b></div>
                <div class="col-custom"><b>Migration Type</b></div>
                <div class="col-custom-sm"><b>Null</b></div>
                <div class="col-custom" style="background-color: "><b title='Create | Index | Show | Edit'>Visibilidade (?)</b></div>
                <div class="col-custom" style="background-color: "><b>Index</b></div>
                <div class="col-custom" style="background-color: "><b>Default</b></div>

                <div class="col-custom"><b></b></div>
              </div>
              <div id="fields" class="input-group input-group-sm mb-3">
              </div>

              <input type="text" id="jsonTableOutPut" name="jsonTableOutPut"><br>
              <!-- <textarea  id="jsonOutPut" name="jsonOutPut"></textarea><br> -->
              </div>
            </form>
            

            <button id="updateJsonTable" class="btn btn-success">Salvar tabela</button>


              <!-- <button id="updateJson">Atualizar  </button> -->




          <div id="newJson"></div>
        </div>
      </div>    
    </div>
  </section>
  <br>
  <section id="codeGenerator">
    <div class="container">
      
      <div class="row">
        <div class="col-sm">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="routesDiv-tab" data-toggle="tab" href="#routesDiv" role="tab" aria-controls="routesDiv" aria-selected="true">Routes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="controllerDiv-tab" data-toggle="tab" href="#controllerDiv" role="tab" aria-controls="controllerDiv" aria-selected="false">Controller</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="modelDiv-tab" data-toggle="tab" href="#modelDiv" role="tab" aria-controls="modelDiv" aria-selected="false">Model</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="requestDiv-tab" data-toggle="tab" href="#requestDiv" role="tab" aria-controls="requestDiv" aria-selected="false">Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="createViewDiv-tab" data-toggle="tab" href="#createViewDiv" role="tab" aria-controls="createViewDiv" aria-selected="false">(Create)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="indexViewDiv-tab" data-toggle="tab" href="#indexViewDiv" role="tab" aria-controls="indexViewDiv" aria-selected="false">(Index)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="showViewDiv-tab" data-toggle="tab" href="#showViewDiv" role="tab" aria-controls="showViewDiv" aria-selected="false">(Show)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="editViewDiv-tab" data-toggle="tab" href="#editViewDiv" role="tab" aria-controls="editViewDiv" aria-selected="false">(Edit)</a>
            </li>






          </ul>
          <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="routesDiv" role="tabpanel" aria-labelledby="home-tab">
                <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveRoutesfile">
                    <textarea id="routes_string_output" name="routes_string_output"></textarea>
                    <label>Arquivo: &nbsp</label>
                    <input id="routes_path" name="routes_path" class="form-control" hidden="hidden" />
                    <label id="routes_path_label" name="routes_path_label" class="form-control"></label>
                    <p><button id="generateRoutes" type="button" class="btn btn-info">Gerar rotas</button></p>
                    <p><button id="generateRoutesFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                  </form>
              </div>
              <div class="tab-pane fade" id="controllerDiv" role="tabpanel" aria-labelledby="controllerDiv-tab">
              <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveControllerFile">
                  <textarea id="controller_string_output" name="contentToWriteFile[]"></textarea>
                  <label>Arquivo: &nbsp</label>
                  <input id="controller_path" name="dirPath[]" class="form-control" hidden="hidden" />
                  <input id="controller_name" name="fileName[]" class="form-control" hidden="hidden"  />
                  <label id="controller_path_label" name="controller_path_label" class="form-control"></label>
                  <p><button id="generateController" type="button" class="btn btn-info">Gerar controlador</button></p>
                  <p><button id="generateControllerFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                </form>
              </div>
              <div class="tab-pane fade" id="modelDiv" role="tabpanel" aria-labelledby="modelDiv-tab">
                <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveModelFile">
                  <textarea id="model_string_output" name="contentToWriteFile[]"></textarea>
                  <label>Arquivo: &nbsp</label>
                  <input id="model_path" name="dirPath[]" class="form-control" hidden="hidden" />
                  <input id="model_name" name="fileName[]" class="form-control" hidden="hidden" />
                  <label id="model_path_label" name="model_path_label" class="form-control"></label>
                  <p><button id="generateModel" type="button" class="btn btn-info">Gerar model</button></p>
                  <p><button id="generateModelFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                </form>

              </div>
              <div class="tab-pane fade" id="requestDiv" role="tabpanel" aria-labelledby="requestDiv-tab">
                <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveRequestFile">
                  <textarea id="request_string_output" name="contentToWriteFile[]"></textarea>
                  <label>Arquivo: &nbsp</label>
                  <input id="request_path" name="dirPath[]" class="form-control" hidden="hidden" />
                  <input id="request_name" name="fileName[]" class="form-control" hidden="hidden" />
                  <label id="request_path_label" name="request_path_label" class="form-control"></label>
                  <p><button id="generateRequest" type="button" class="btn btn-info">Gerar request</button></p>
                  <p><button id="generateRequestFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                </form>
              </div>
              <div class="tab-pane fade" id="createViewDiv" role="tabpanel" aria-labelledby="createViewDiv-tab">
                <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveCreateFile">
                  <textarea id="createView_string_output" name="contentToWriteFile[]"></textarea>
                  <label>Arquivo: &nbsp</label>
                  <input id="viewCrudName" name="viewCrudName[]" class="form-control" hidden="hidden" />
                  <input id="create_path" name="dirPath[]" class="form-control" hidden="hidden" />
                  <input id="create_name" name="fileName[]" class="form-control" hidden="hidden" />
                  <label id="create_path_label" name="request_path_label" class="form-control"></label>
                  <p><button id="generateCreateView" type="button" class="btn btn-info">Gerar Create View </button></p>
                  <p><button id="generateCreateViewFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                </form>


              </div>
              <div class="tab-pane fade" id="indexViewDiv" role="tabpanel" aria-labelledby="indexViewDiv-tab">
                <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveIndexFile">
                  <textarea id="indexView_string_output" name="contentToWriteFile[]"></textarea>
                  <label>Arquivo: &nbsp</label>
                  <input id="viewCrudName" name="viewCrudName[]" class="form-control"  hidden="hidden" />
                  <input id="index_path" name="dirPath[]" class="form-control" hidden="hidden" />
                  <input id="index_name" name="fileName[]" class="form-control" hidden="hidden" />
                  <label id="index_path_label" name="index_path_label" class="form-control"></label>
                  <p><button id="generateIndexView" type="button" class="btn btn-info">Gerar Index View </button></p>
                  <p><button id="generateIndexViewFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                </form>
              </div>
              <div class="tab-pane fade" id="showViewDiv" role="tabpanel" aria-labelledby="showViewDiv-tab">
                <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveShowFile">
                  <textarea id="showView_string_output" name="contentToWriteFile[]"></textarea>
                  <label>Arquivo: &nbsp</label>
                  <input id="viewCrudName" name="viewCrudName[]" class="form-control"  hidden="hidden" />
                  <input id="show_path" name="dirPath[]" class="form-control" hidden="hidden" />
                  <input id="show_name" name="fileName[]" class="form-control" hidden="hidden" />
                  <label id="show_path_label" name="show_path_label" class="form-control"></label>
                  <p><button id="generateShowView" type="button" class="btn btn-info">Gerar Create View </button></p>
                  <p><button id="generateShowViewFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                </form>

              </div>
              <div class="tab-pane fade" id="editViewDiv" role="tabpanel" aria-labelledby="editViewDiv-tab">
                <form enctype=”multipart/form-data” method="POST" action="save-json.php" id="saveEditFile">
                  <textarea id="editView_string_output" name="contentToWriteFile[]"></textarea>
                  <label>Arquivo: &nbsp</label>
                  <input id="viewCrudName" name="viewCrudName[]" class="form-control"  hidden="hidden" />
                  <input id="edit_path" name="dirPath[]" class="form-control" hidden="hidden" />
                  <input id="edit_name" name="fileName[]" class="form-control" hidden="hidden" />
                  <label id="edit_path_label" name="edit_path_label" class="form-control"></label>
                  <p><button id="generateEditView" type="button" class="btn btn-info">Gerar Edit View </button></p>
                  <p><button id="generateEditViewFile" type="button" class="btn btn-success">Gerar arquivo</button></p>
                </form>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <button id="backToTable" type="button" class="btn btn-danger float-sm-right">Voltar para tabela</button>
        </div>
      </div>
    </div>


    <div id="" class="container">
      <div id="" class="row">
        <div id="" class="col-12">
          <textarea id="navView" class="sr-only"></textarea>
          <textarea id="footerView" class="sr-only"></textarea>
        </div>
      </div>
    </div>

  </section>


  <br>
  <!-- Modal -->
  <div id="messageModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div id="modal-header" class="modal-header">
          <h5 id="modal-title" class="modal-title" id="exampleModalLabel">Êxito</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="modal-body" class="modal-body">
          Operação realizada com sucesso!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <script>
      // "global" vars, built using blade
      var assetPath = '{{ asset('') }}';
  </script>

  
@endsection

