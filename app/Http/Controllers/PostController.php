<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PostController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    public function new_post(){
    	$category_info = Category::where('category_status', 1)->get();
    	$header_nav = view('dashboard.pages.includes.header_nav');
    	$main_sidebar = view('dashboard.pages.includes.main_sidebar');
    	$new_post = view('dashboard.pages.add_post', ['all_category'=>$category_info]);

    	return view('dashboard.master')
    		-> with('header_nav', $header_nav)
    		-> with('main_sidebar', $main_sidebar)
    		-> with('main_content', $new_post);
    }

    public function manage_post(){
    	$post_info = Post::all();
    	$header_nav = view('dashboard.pages.includes.header_nav');
    	$main_sidebar = view('dashboard.pages.includes.main_sidebar');
    	$manage_post = view('dashboard.pages.manage_posts', ['all_post'=>$post_info]);

    	return view('dashboard.master')
    		-> with('header_nav', $header_nav)
    		-> with('main_sidebar', $main_sidebar)
    		-> with('main_content', $manage_post);
    }

    public function add_new_post(Request $request){
    	$this->validate($request, [
    		'post_title'=>'required',
    		'post_address'=>'required',
    		'post_category'=>'required',
    		'post_status'=>'required',
    		'post_description'=>'required',
    		'post_latitude'=>'required',
    		'post_longitude'=>'required',
    		'featured_image'=>'required',
    		'post_tags'=>'required'
    		]);
    	$featured_image = $request->featured_image;
    	$image_name = $featured_image->getClientOriginalName();
    	$image_path = 'uploaded_images/';
    	$image_url = $image_path.$image_name;
    	$featured_image->move($image_path, $image_name);

    	$post_info = new Post;

    	$post_info->post_title = $request->post_title;
    	$post_info->post_address = $request->post_address;
    	$post_info->category_id = $request->post_category;
    	$post_info->user_id = $request->user_id;
    	$post_info->post_description = $request->post_description;
    	$post_info->post_latitude = $request->post_latitude;
    	$post_info->post_longitude = $request->post_longitude;
    	$post_info->post_status = $request->post_status;
    	$post_info->featured_image = $image_url;
    	$post_info->post_tags = $request->post_tags;
    	$post_info->save();

    	return redirect('/new-post')->with('message', 'Posted Successfully');

    }

    public function unpublish_post($post_id){
    	$post_info = Post::find($post_id);
    	$post_info->post_status = 0;
    	$post_info->save();
    	return redirect('/manage-post');
    }

    public function publish_post($post_id){
    	$post_info = Post::find($post_id);
    	$post_info->post_status = 1;
    	$post_info->save();
    	return redirect('/manage-post');
    }

    public function edit_post($id){
    	$post_info = Post::find($id);
    	$category_info = Category::where('category_status', 1)->get();

    	$header_nav = view('dashboard.pages.includes.header_nav');
    	$main_sidebar = view('dashboard.pages.includes.main_sidebar');
    	$edit_post = view('dashboard.pages.edit_post_content', ['all_post'=>$post_info, 'all_category'=>$category_info]);

    	return view('dashboard.master')
    		-> with('header_nav', $header_nav)
    		-> with('main_sidebar', $main_sidebar)
    		-> with('main_content', $edit_post);
    }

    public function update_post(Request $request){
    	$featured_image = $request->featured_image;
    	$image_name = $featured_image->getClientOriginalName();
    	$image_path = 'uploaded_images/';
    	$image_url = $image_path.$image_name;
    	$featured_image->move($image_path, $image_name);
    	
    	$post_id = $request->post_id;
    	$post_info = Post::find($post_id);

    	$post_info->post_title = $request->post_title;
    	$post_info->post_address = $request->post_address;
    	$post_info->category_id = $request->post_category;
    	$post_info->post_description = $request->post_description;
    	$post_info->post_latitude = $request->post_latitude;
    	$post_info->post_longitude = $request->post_longitude;
    	$post_info->featured_image = $image_url;
    	$post_info->post_tags = $request->post_tags;
    	$post_info->save();
    	return redirect('/manage-post');
    }



}
