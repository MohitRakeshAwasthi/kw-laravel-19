<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPages extends Controller
{

	public $slug;

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->slug = request()->segment(2);
    }

	/**
     * Display view for Static.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $slug )
    {
    	    	
		try 
		{

			return view( 'frontend.static-pages.' . $this->slug );
		
		}

		catch( \Exception $e)
		{

			return view( 'frontend.404.index' );
 
		}
    	
    }

}
