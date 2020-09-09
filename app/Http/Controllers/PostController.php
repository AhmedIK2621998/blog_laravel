<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

class PostController extends Controller
{
    
    public function Index(){

        $PostsFromDB = Post::all();
        
        
        return view('posts.index',['Posts' => $PostsFromDB]);
    }

    public function Show(Post $Post) {

        // $singlePost = Post::findorfail($post);
        //$singlePost = Post::where('id', $post)->first();     // Another Way To Get Find In Database

        // return view('posts.show', ['post' => $singlePost]);

        
        return view('posts.show', ['post' => $Post]);

    }

    public function Create() {

        $users = User::all();

        return view('posts.create',['users'=> $users] );
    }

    public function store(Request $request) {

        // $data = request()->all();

        // $title = request()->title;
        // $description = request()->description; // Another way 

        $title = $request->title;
        $description = $request->description;
        $userid = $request->user_id;

        // dd($userid);
        $post = POST::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $userid
        ]);

        // another way to  pass value in DB
        
        // $post = new post();

        // $post->title = $title;
        // $post->description = $description;

        // $post->save();

        // return redirect(route('posts.index'));
        return redirect()->route('posts.index');
    }

    public function Edit(Post $Post) {

        // $singlePost = Post::findorfail($post);

        // return view('posts.edit', ['post' => $singlePost]);

        $users = User::all();

        return view('posts.edit', ['post' => $Post, 'users'=> $users]);
    }

    public function Update($post, Request $request) {

        $singlePost = Post::findorfail($post);

        // $title = $request->title;
        // $description = $request->description;
        $singlePost->update([
            'title' => $request->title,
            'description' => $request->description,
            'userid' => $request->user_id,

        ]);

        return redirect()->route('posts.index');
    }

    public function Destory($post) {

    //    Post::where('id','$post')->delete(); /// in single querey

        $singlePost = Post::findorfail($post);

        $singlePost->delete();

        
        return redirect()->route('posts.index');
    }
}
