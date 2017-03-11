<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class SearchController extends Controller
{
    public function view_search(Request $request){
    	$search_text = $request->search_text;
    	$search_category = $request->search_category;

    	$all_category_info = Category::where('category_status', 1)->get();
        $all_post_info = Post::where('post_status', 1)
                        -> orderBy('id', 'desc')
                        -> get();
        if($search_category > 0){
        	$all_post_search = Post::where('category_id', $search_category)
        				-> where('post_title', 'LIKE', '%'.$search_text.'%')
        				-> orWhere('post_description', 'LIKE', '%'.$search_text.'%')
        				-> orWhere('post_tags', 'LIKE', '%'.$search_text.'%')
        				-> orWhere('post_address', 'LIKE', '%'.$search_text.'%')
        				-> get();
        } else {
        	$all_post_search = Post::where('post_title', 'LIKE', '%'.$search_text.'%')
        				-> orWhere('post_description', 'LIKE', '%'.$search_text.'%')
        				-> orWhere('post_tags', 'LIKE', '%'.$search_text.'%')
        				-> orWhere('post_address', 'LIKE', '%'.$search_text.'%')
        				-> get();
        }


        //dd($all_post_search);
        // echo "<pre>";
        // if(count($all_post_search) > 0)
        //     print_r($all_post_search);
        // else
        //     echo "No result";
        // exit();

    	$header_nav = view('pages.includes.header_nav', ['all_category_info'=> $all_category_info]);
    	$todays_posts = view('pages.todays_posts', ['all_post_info'=> $all_post_info]);
        $all_category = view('pages.all_category', ['all_category_info'=> $all_category_info]);
        $search_result = view('pages.search', ['search_result'=>$all_post_search]);

    	return view('master')
    		-> with('header_nav', $header_nav)
    		-> with('all_category', $all_category)
    		-> with('todays_posts', $todays_posts)
    		-> with('main_content', $search_result);
    }


    public function search_by_category($cat_id){

    	$all_category_info = Category::where('category_status', 1)->get();
        $all_post_info = Post::where('post_status', 1)
                        -> orderBy('id', 'desc')
                        -> get();
        $all_post_search = Post::where('category_id', $cat_id)
        				-> orderBy('id', 'desc')
        				-> get();


        //dd($all_post_search);
        //echo "<pre>";
        //print_r($all_post_search);

    	$header_nav = view('pages.includes.header_nav', ['all_category_info'=> $all_category_info]);
    	$todays_posts = view('pages.todays_posts', ['all_post_info'=> $all_post_info]);
        $all_category = view('pages.all_category', ['all_category_info'=> $all_category_info]);
        $search_result = view('pages.search', ['search_result'=>$all_post_search]);

    	return view('master')
    		-> with('header_nav', $header_nav)
    		-> with('all_category', $all_category)
    		-> with('todays_posts', $todays_posts)
    		-> with('main_content', $search_result);
    }


}
