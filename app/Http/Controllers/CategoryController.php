<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function new_category(){
    	$header_nav = view('dashboard.pages.includes.header_nav');
    	$main_sidebar = view('dashboard.pages.includes.main_sidebar');
    	$new_category = view('dashboard.pages.add_category');

    	return view('dashboard.master')
    		-> with('header_nav', $header_nav)
    		-> with('main_sidebar', $main_sidebar)
    		-> with('main_content', $new_category);
    }

    public function add_new_category(Request $request){
    	$this->validate($request,[
    		'category_name'=>'required|min:2',
    		'category_status'=>'required'
    		]);
    	$category = new Category;
    	$category->category_name = $request->category_name;
    	$category->category_description = $request->category_description;
    	$category->category_status = $request->category_status;
    	$category->save();

    	return redirect('/new-category')->with('message', 'Category Added Successfully');
    }


    public function manage_category(){
    	$category_info = Category::all();
    	$header_nav = view('dashboard.pages.includes.header_nav');
    	$main_sidebar = view('dashboard.pages.includes.main_sidebar');
    	$manage_category = view('dashboard.pages.manage_category', ['all_category'=> $category_info]);

    	return view('dashboard.master')
    		-> with('header_nav', $header_nav)
    		-> with('main_sidebar', $main_sidebar)
    		-> with('main_content', $manage_category);
    }

    public function publish_category($id){
        $category_info = Category::find($id);
        $category_info->category_status = 1;
        $category_info->save();
        return redirect('/manage-category');
    }

    public function unpublish_category($id){
        $category_info = Category::find($id);
        $category_info->category_status = 0;
        $category_info->save();
        return redirect('/manage-category');
    }

    public function edit_category($id){
        $category_info = Category::find($id);

        $header_nav = view('dashboard.pages.includes.header_nav');
        $main_sidebar = view('dashboard.pages.includes.main_sidebar');
        $new_category = view('dashboard.pages.edit_category_content', ['category_info'=>$category_info]);

        return view('dashboard.master')
            -> with('header_nav', $header_nav)
            -> with('main_sidebar', $main_sidebar)
            -> with('main_content', $new_category);
    }

    public function update_category(Request $request){
        $category_id = $request->category_id;
        $category_info = Category::find($category_id);

        $category_info->category_name = $request->category_name;
        $category_info->category_description = $request->category_description;
        $category_info->save();
        return redirect('/manage-category');
    }
}
