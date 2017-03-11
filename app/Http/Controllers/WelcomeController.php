<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\PostComment;

class WelcomeController extends Controller
{
    public function index(){
        $all_category_info = Category::where('category_status', 1)->get();
        $all_post_info = Post::where('post_status', 1)
                        -> orderBy('id', 'desc')
                        -> get();
        $header_nav = view('pages.includes.header_nav', ['all_category_info'=> $all_category_info]);
        $home_banner = view('pages.home_banner', ['all_category_info'=> $all_category_info]);
        $featured_posts = view('pages.featured_posts', ['all_post_info'=> $all_post_info]);
        $all_category = view('pages.all_category', ['all_category_info'=> $all_category_info]);
        $todays_posts = view('pages.todays_posts', ['all_post_info'=> $all_post_info]);
        $footer = view('pages.includes.footer');

        return view('master')
            -> with('header_nav', $header_nav)
            -> with('home_banner', $home_banner)
            -> with('todays_jobs', $todays_posts)
            -> with('all_category', $all_category)
            -> with('main_content', $featured_posts)
            -> with('footer', $footer);
    }


    public function view_post($id){
        $all_category_info = Category::where('category_status', 1)->get();
        $post_info = Post::where('id', $id)->first();
        $comment_info = PostComment::where('post_id', $id)->get();
        $similar_posts = Post::where('category_id', $post_info->category_id)
                            -> take(10)
                            -> get();
        //dd($post_info);

        $header_nav = view('pages.includes.header_nav', ['all_category_info'=> $all_category_info]);
        $footer = view('pages.includes.footer');
        $single_post_content = view('pages.single_post', ['single_post_info'=>$post_info, 'all_comments'=>$comment_info], ['similar_posts'=>$similar_posts]);
        $single_post_sidebar = view('pages.single_post_sidebar', ['single_post_info'=>$post_info]);

        return view('single_post_home')
            -> with('header_nav', $header_nav)
            -> with('single_post_content', $single_post_content)
            -> with('single_post_sidebar', $single_post_sidebar)
            -> with('footer', $footer);
    }

    public function add_comment(Request $request){
        $this->validate($request, [
            'comment_user_name'=>'required',
            'comment_user_email'=>'required',
            'comment_text'=>'required'
            ]);
        $comment_info = new PostComment;
        //dd($request);
        $post_id = $request->post_id;
        $comment_info->post_id = $request->post_id;
        $comment_info->post_comment = $request->comment_text;
        $comment_info->post_username = $request->comment_user_name;
        $comment_info->post_user_email = $request->comment_user_email;
        $comment_info->save();
        return redirect('/view-post/'.$post_id);
    }


}
