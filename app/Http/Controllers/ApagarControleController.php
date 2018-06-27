<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Http\Requests;  

class ControleController extends Controller
{
	/** 
	 * Display a listing of the resource. 
	 * 
	 * @return \Illuminate\Http\Response 
 	 */ 
	public function index() 
	{
		$controles = \App\Models\Controle::all();
		return view('cruds.controle.index', compact('controles'));
	}
 
 	/** 
 	 * Show the form for creating a new resource. 
 	 * 
 	 * @return \Illuminate\Http\Response
 	 */
 	public function create()
 	 {
 	 	// dd('teste');
 		if(999==999){ // input your acl or condition
 			//return redirect()->route('cruds.controles.create');
 			return view('cruds.controle.create');
 		}else{
 			return redirect()->route('cruds.controles.index');
 		}
 	}
 
 	/** 
 	 * Store a newly created resource in storage. 
 	 * 
 	 * @param  \Illuminate\Http\Request  $request 
 	 * @return \Illuminate\Http\Response
 	 */
 	public function store(\App\Http\Request\ControleRequest $request)
 	{//Request $request
 		if(999==999){ // input your acl or condition
 			\App\Models\Controle::create($request->all());
 			//$last_id = \App\Controle::limit(1)->orderBy('controle_id','desc')->value('controle_id');
 			//$controle = \App\Controle::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]);
 			//$controle = new Controle; $controle->name = $request->input('input_html'); $controle->save(); //insertedId = $controle->id;
 			\Session::flash('flash_message',[
 				'msg'=>"Controle successfully stored!", 
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.controle.index');
 		}else{
 			return redirect()->route('cruds.controle.index');
 		}
 	}
 
 	/** 
 	 * Display the specified resource. 
 	 * 
 	 * @param  int  $id 
 	 * @return \Illuminate\Http\Response
 	 */
 	public function show($id)
 	{
 		if(999==999){ // input your acl or condition
 			$controle = \App\Models\Controle::find($id);
 			// get previous user id
 			$previous = \App\Models\Controle::where('id', '<', $controle->id)->max('id');
 			if($previous==null){
 				$previous = \App\Models\Controle::orderBy('id','desc')->value('id');
 			}
 			// get next user id
 			$next = \App\Models\Controle::where('id', '>', $controle->id)->min('id');
 			if($next==0){
 				$next = \App\Models\Controle::orderBy('id','asc')->value('id');
 			}
 			return view('cruds.controle.show', compact('controle','previous','next','id'));
 		}else{
 			return redirect()->route('cruds.controle.index');
 		}
 	}
 
 	/** 
 	 * Show the form for editing the specified resource. 
 	 * 
 	 * @param  int  $id 
 	 * @return \Illuminate\Http\Response
 	 */
 	public function edit($id)
 	{
 	
 		if(999==999){ // input your acl or condition
 			$controle = \App\Models\Controle::find($id);
 			return view('cruds.controle.edit', compact('controle'));
 		}else{
 			return redirect()->route('cruds.controle.index');
 		}
 	}
 
 	/** 
 	 * Update the specified resource in storage. 
 	 *
 	 * @param  \Illuminate\Http\Request  $request 
 	 * @param  int  $id 
 	 * @return \Illuminate\Http\Response
 	 */
 	public function update(\App\Http\Requests\ControleRequest $request, $id)
 	{//Request $request
 		if(999==999){ // input your acl or condition
 			\App\Models\Controle::find($id)->update($request->all());
 			$controle = \App\Models\Controle::find($id);// $controle->name=Input::get('name');controle->save()//$request->input('input_html')
 			\Session::flash('flash_message',[
 				'msg'=>"Controle successfully updated!", 
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.controle.index');
 		}else{
 			return redirect()->route('cruds.controle.index');
 		}
 	}
 
 	/** 
 	 * Remove the specified resource from storage. 
 	 *
 	 * @param  int  $id 
 	 * @return \Illuminate\Http\Response
 	 */
 	public function destroy($id)
 	{
 		if(999==999){ // input your acl or condition
 			$controle = \App\Models\Controle::find($id);
 			$controle->delete();
 			Session::flash('flash_message',['
 				msg'=>"Controle successfully removed!", 
 				'class'=>"alert-success"
 			]);
 			return redirect()->route('cruds.controle.index');
 		}else{
 			return redirect()->route('cruds.controle.index');
 		}
 	}
 
 }