<?php



namespace Casulo\Fury;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;





class FuryController extends Controller
{

    // $myVar = "testando";
    // 
    public function assets(){
        return asset('');
    }


    public function index(){
    	return view('fury.index');
    }
    public function config()
    {
        return view('fury.config');
    }
    public function tables()
    {
        return view('fury.tables');
    }
    public function generate()
    {
        return view('fury.generate');
    }


    public function CreateTable(){
        // die(var_dump("CreateTableFunction"));
        // echo "CreateNewTable";
        // $tableDir = "../tables/";
        $tableDir = "fury-files/tables/";
        $fileName = $tableDir.$_POST['newTable'].".json";


        $myObj = new \stdClass();
        $myObj->table_name = "Usuario";
        $myObj->singular = "usuario";
        $myObj->plural = "usuarios";
        $myObj->current_table_path = $fileName;
        // $myObj->fields = ["id"=>"1"];
        $myObj->fields = array(
            array("id"=>"1",
                "display_name"=>"Id",
                "html_name"=>"id",
                "html_type"=>"number",
                "migration_type"=>"integer",
                "nullable"=>"true",
                "create_view_visibility"=>"false",
                "index_view_visibility"=>"true",
                "show_view_visibility"=>"true",
                "edit_view_visibility"=>"false",
                "index"=>"PK","default"=>"auto-increment")
        );

        // echo json_encode($myObj);

        
        // https://stackoverflow.com/questions/15810257/create-nested-json-object-in-php
        
        // echo gettype($myObj);

        // $myJSON = json_encode($myObj);



        // echo($myJsonString);
        // $myJsonString = json_decode($myJsonString);

        $fp = fopen($fileName, 'w');
        fwrite($fp, json_encode($myObj));
        fclose($fp);
        
        $response = array("message"=>"Done","status"=>"Ok");
        return response()->json($response);
    }
    public function UpdateTable(Request $request){
        
        $tableDir = "fury-files/tables/";
        $oldTableName = $_POST['oldFileName'];
        $newTableName = $_POST['newFileName'];

        $oldTableName = $this->CleanString($oldTableName);
        $newTableName = $this->CleanString($newTableName);
        
        $oldTableName = $tableDir.$oldTableName;
        $newTableName = $tableDir.$newTableName;

        $oldTableName = $oldTableName.".json";
        $newTableName = $newTableName.".json";

        rename($oldTableName, $newTableName);

        $response = array("message"=>"Done","status"=>"Ok");
        return response()->json($response);
    }
    public function CleanString($string) {
       $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
       $string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);

       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function UpdateJsonTable(Request $request){

        $response = $request->jsonTableOutPut;
        $response = str_replace(" | " , "\n", $response);

        $responseStringToJsonConvert = json_decode($response, true);

        //removes the 'asset()' string path from the final newJsonFileTablePath
        // $newJsonFileTablePath = str_replace(asset(""),"",$responseStringToJsonConvert['current_table_path']);
        $newJsonFileTablePath = $responseStringToJsonConvert['current_table_path'];

        $fp = fopen($newJsonFileTablePath, 'w'); 
        

        fwrite($fp, $response); 
        fclose($fp);
        
        return response()->json($responseStringToJsonConvert);
    }

    public function UpdateRoutes(Request $request){
            // if contains string on file
            if( strpos(file_get_contents(base_path()."/".$request->routes_path),$request->routes_string_output) !== false) {
                $response = array("title"=>"Atenção","message"=>"Rotas já existem","class"=>"bg-warning");
                // echo json_encode($response);

            } else{
                // appends routes to the web file
                $myfile = file_put_contents(base_path()."/".$request->routes_path, $request->routes_string_output , FILE_APPEND | LOCK_EX);
                $response = array("title"=>"Êxito","message"=>"Rotas inseridas com sucesso!","class"=>"bg-success");
            }
            // echo json_encode($response);
            return response()->json($response);
    }

    public function UpdateFiles(Request $request){
        
        // $dirPath = $_POST['dirPath'];
        $dirPath = $request->dirPath;
        // $dirPath = "app/Http/Controllers";
        $fileName = $request->fileName;
        
        $dirPath = array_filter($dirPath, function($item) {
          return $item != null;
        });


        // die(var_dump($request->fileName));
        $dirPath = implode("", $dirPath);
        // $dirPath = "app/Http/Controllers";
        $fileName = implode("", $fileName);

        // check if it is a crud file
        if(isset($_POST['viewCrudName'])){
            // write crud files
            $viewCrudName = implode("|",$request->viewCrudName);
            $myPath = base_path()."/".$dirPath."/".$viewCrudName; // é pasta
            // echo "its a crud name!\n\n";
        }else{
            // write item files
            $myPath = base_path()."/".$dirPath; // é pasta
            // echo "isnt a crud name at all sorry\n\n";
        }

        // check if folder exists
        if(is_dir($myPath)){
            // echo "\n\nPasta '$myPath' existe\n\n";
        }else{
            // echo "\n\nPasta '$myPath' não existia mas foi criada\n\n";
            mkdir($myPath, 0777, true);
        }

        $content = implode("",$_POST['contentToWriteFile']);
        // $myfile = fopen("app/fodaci.php", "w") or die("Unable to open file!");
        // $myfile = fopen("app/".$fileName.".php", "w") or die("Unable to open file!");
        
        // check if file exists
        if(file_exists($myPath."/".$fileName.".php")){
            $response = array("title"=>"Atenção","message"=>"Arquivo já existe","class"=>"bg-danger");
        }else{
            $myfile = fopen($myPath."/".$fileName.".php", "w") or die("Unable to open file!");
            $txt = $content;
            fwrite($myfile, $txt);
            fclose($myfile);    
            $response = array("title"=>"Êxito","message"=>"Arquivo criado com sucesso!","class"=>"bg-success");
        }

        return response()->json($response);
    }

    public function UpdateConfig(Request $resquest){
        $fp = fopen('fury-files/misc/config.json', 'w');
    
        $response = $_POST['jsonConfigOutput'];
        
        $response = str_replace("|" , "\n", $response);
        $response = str_replace("§" , "\\n", $response);

        fwrite($fp, $response); 
        fclose($fp);

        $response = array("mensagem"=>"sucesso");   
        return response()->json($response);
    }


    public function add($a, $b){
    	$result = $a + $b;
		return view('fury::add', compact('result'));
    }

    public function subtract($a, $b){
    	$result = $a - $b;
		return view('fury::add', compact('result'));
    }

}
