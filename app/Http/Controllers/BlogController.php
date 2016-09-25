<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App;
use Auth;
use Redirect;

class BlogController extends Controller
{
    function postNew(){
        $title = Request::get('title');
        $body = Request::get('body');
        $user_id = Auth::user()->id;
        $blog =  new App\Blog();
        $blog->title = $title;
        $blog->body = $body;
        $blog->user_id = $user_id;
        $blog->save();
        return Redirect::to('/');
    }
    function getNew(){
        return view('new_blog');
    }
    function getView($id){
        $blog = App\Blog::findOrFail($id);
        return view('view_blog',['blog'=>$blog]);
    }
}
