<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPages extends Controller
{

	/**
     * Display view for Static.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $slug )
    {
    	
    	switch ( $slug ) {

    		case 'divorce':
    			
			    return view('frontend.404.index');

			case 'marriage-registration':

			    return view('frontend.static-pages.marriage-registration');


    		default:
			    
			    return view('frontend.404.index');

    	}
    }

}
