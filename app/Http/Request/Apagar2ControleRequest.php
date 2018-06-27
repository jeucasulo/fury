<?php 
   
  namespace App\Http\Request; 
   
  use Illuminate\Foundation\Http\FormRequest; 
   
  class ControleRequest extends FormRequest 
  { 
  		/** 
  		 * Determine if the user is authorized to make this request. 
  		 * 
  		 * @return bool 
  		 */ 
  		public function authorize() 
  		{ 
  			return true; 
  		} 
  
  		/** 
  		 * Get the validation rules that apply to the request. 
  		 * 
  		 * @return array 
  		 */ 
  		 
  		public function rules() 
  		{ 
  			return [
  				'name'=>'required|max:20',
  				'test'=>'required|max:20', 
  			]; 
  		} 
  		public function messages() 
  		{ 
  			return [
  				'name.required'=>'Field required',
  				'test.required'=>'Field required', 
  			]; 
  		}
  //rules options: max:number|min:number|email|unique:posts|bail|nullable|date 
  }