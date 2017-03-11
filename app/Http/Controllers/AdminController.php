<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $user_info = User::where('id', Auth::id())->first();
    	$header_nav = view('dashboard.pages.includes.header_nav');
    	$main_sidebar = view('dashboard.pages.includes.main_sidebar');
    	$main_content = view('dashboard.pages.main_content', ['user_info'=> $user_info]);

    	return view('dashboard.master')
    		-> with('header_nav', $header_nav)
    		-> with('main_sidebar', $main_sidebar)
    		-> with('main_content', $main_content);
    }


    public function manage_members(){
    	$header_nav = view('dashboard.pages.includes.header_nav');
    	$main_sidebar = view('dashboard.pages.includes.main_sidebar');
    	$manage_members = view('dashboard.pages.manage_members');

    	return view('dashboard.master')
    		-> with('header_nav', $header_nav)
    		-> with('main_sidebar', $main_sidebar)
    		-> with('main_content', $manage_members);
    }
}
