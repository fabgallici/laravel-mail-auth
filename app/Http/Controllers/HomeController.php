<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Post;

use Illuminate\Support\Facades\Mail;
use App\Mail\DBActionDelete;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function postShow($id) {
        $post = Post::findOrFail($id);
        return view('pages.postShow', compact('post'));
    }

    public function postDelete($id) {
        $post = Post::findOrFail($id);
        $post->delete();

        Mail::to("prova@mail.com")
            ->send(new DBActionDelete(
                "Post",
                $post->title
            ));


        return redirect() -> route('home.index');

    }
}
