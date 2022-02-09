<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;
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
        $tags = Tag::all();
    
        return view('pages.create-post',compact('categories','tags'));
    }

    public function store(Request $request){
       
        $data = $request -> validate([
            "Titolo" => "required|string|min:3",
           
        ]);
        $post = Post::make($data);
        $category = Category::findOrFail($request -> get('category'));
       
        $post -> category() -> associate($category);
        $post ->save();

        $tags = Tag::findOrFail($request -> get('tags'));
        $post -> tags() -> attach($tags);
        $post -> save();

        return redirect() -> route('posts');
    }

    public function edit($id){

        $categories = Category::all();
        $tags = Tag::all();

        $post = Post::findOrFail($id);
        

        return view('pages.edit',compact('categories','tags','post'));
    }

    public function update(Request $request, $id){
        $data = $request -> validate([
            "Titolo" => "required|string|min:3",
           
        ]);
       $post = Post::findOrFail($id);
       $post -> update($data);

       $category = Category::findOrFail($request -> get('category'));
       $post -> category() -> associate($category);
       $post ->save();

       $tags = Tag::findOrFail($request -> get('tags'));
       $post -> tags() -> sync($tags);
       $post -> save();


       return redirect() -> route('posts');
    }
}
