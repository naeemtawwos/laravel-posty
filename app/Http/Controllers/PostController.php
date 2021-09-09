<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Barryvdh\Debugbar\Facade as Debugbar;

class PostController extends Controller
{
    //
    public function index(){
        // dd(auth()->user()->posts);

        $posts = Post::paginate(10);
        // Debugbar::error('test');
        return view('posts.index', [
            'posts' => $posts,
        ]);



    }

    public function save(Request $request){
        $this->validate($request,[
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
        // Post::created([
        //         'body' => $request->body,
        //         // 'user_id' => auth()->user()->id,
        //         'user_id' => auth()->id(),
        // ]);
    }

}
