<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Display view for sign in.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// dd(  auth()->user() );
        return view('frontend.dashboard.index' , [ 'user' => auth()->user() ] );
    }

}
