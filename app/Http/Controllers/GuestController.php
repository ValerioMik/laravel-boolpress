<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
class GuestController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function post(){

        $posts = Post::all();
        return view('pages.posts', compact('posts'));
    }

    public function createpost(){

        $categories = Category::all();
    
        return view('pages.create-post',compact('categories'));
    }

    public function store(Request $request){
        $data = $request -> validate([
            "Titolo" => "required|string|min:3",
           
        ]);
        $post = Post::make($data);
        $category = Category::findOrFail($request -> get('category'));
       
        $post -> category() -> associate($category);
        $post ->save();

        return redirect() -> route('posts');
    }
}
