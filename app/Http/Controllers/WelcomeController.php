<?php namespace psl\Http\Controllers;

use psl\Http\Requests;
use psl\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class WelcomeController extends Controller {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	

	
	
}
