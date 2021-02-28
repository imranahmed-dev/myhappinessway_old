<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Category;
use Auth;
use Carbon\Carbon;
use App\Model\Post;
use App\Model\Comment;
use App\Model\Tag;
use App\User;

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
        $data['totalpost'] = Post::count();
        $data['totalcomments'] = Comment::count();
        $data['totalcategory'] = Category::count();
        $data['totaluser'] = User::count();

        return view('backend.layouts.home',$data);
    }
}
