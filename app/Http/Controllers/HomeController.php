<?php namespace psl\Http\Controllers;

use psl\Http\Requests;
use psl\Http\Controllers\Controller;
use Auth;
use Redirect;
use Illuminate\Http\Request;
use psl\Categoria;


class HomeController extends Controller {

	public function __construct(){
		//$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$psms =  \psl\Psm::all();
		$categorias =  \psl\Categoria::all();
		
		//return View:make('home'): 
		return view('home') -> with('psms', $psms)->with('listacats',$categorias);
			
	}

	

	
	
}
