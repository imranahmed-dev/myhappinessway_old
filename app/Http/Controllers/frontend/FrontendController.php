<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Post;
use App\Model\Category;
use App\User;
use App\Model\Comment;
use App\Model\Tag;
use Auth;

class FrontendController extends Controller
{
    public function index(){
        //Top post
        $topPosts = Post::with('category','user')->where('status',2)->latest()->limit(5)->get();
        $data['topFirstPosts'] = $topPosts->splice(0,2);
        $data['topMiddlePosts'] = $topPosts->splice(0,1);
        $data['topLastPosts'] = $topPosts->splice(0);
        
        //Recent post
        $data['recentPosts'] = Post::where('status',2)->paginate(3);
        
        //Bottom post
        $bottomPost = Post::with('category','user')->where('status',2)->inRandomOrder()->limit(4)->get();
        $data['bottomFirstPosts1'] = $bottomPost->splice(0,1);
        $data['bottomFirstPosts2'] = $bottomPost->splice(0,2);
        $data['bottomLastPosts'] = $bottomPost->splice(0);
        
        $data['categories'] = Category::limit(8)->get();
        
        return view('frontend.pages.home', $data);
    }
    
    public function about(){

        return view('frontend.pages.about');
    }
    
    public function category($slug){
        
        $category = Category::where('slug',$slug)->first();
        if($category){
            $posts = Post::where('category_id',$category->id)->where('status',2)->paginate(3);
            return view('frontend.pages.category',compact('category','posts'));
        }else{
            return redirect()->route('frontend');
        }
        
    }
    
    public function tag($slug){
        $tag = Tag::where('slug', $slug)->first();
        if($tag){
            $posts = $tag->posts()->orderBy('created_at', 'desc')->paginate(3);

            return view('frontend.pages.tag', compact(['tag', 'posts']));
        }else {
            return redirect()->route('frontend');
        }
    }
    
    public function contact(){

        return view('frontend.pages.contact');
    }
    
    public function post($slug){

        $data['postincrease'] = Post::where('slug',$slug)->increment('post_view');


        $data['post'] = Post::with('category', 'user')->where('slug', $slug)->where('status',2)->first();
        
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        
        $relatedpost = Post::where('category_id',$data['post']->category_id)->where('status',2)->inRandomOrder()->limit(4)->get();
        
        $data['relatedpostFirstPosts1'] = $relatedpost->splice(0,1);
        $data['relatedpostFirstPosts2'] = $relatedpost->splice(0,2);
        $data['relatedpostLastPosts'] = $relatedpost->splice(0);
        
        $data['comments'] = Comment::where('post_id',$data['post']->id)->get();
        $data['commentcount'] = Comment::where('post_id',$data['post']->id)->count();
        




        return view('frontend.pages.single',$data);
    }
    
    public function allcategory(){
        $categories = Category::all();
        return view('frontend.pages.allcategory', compact('categories'));
    }
    public function login_view(){
        return view('frontend.pages.login');
    }
    public function registration_view(){
        return view('frontend.pages.registration');
    }
    
    public function user_profile($id){
        $data['user_info'] = User::where('id',$id)->first();
        $data['user_posts'] = Post::where('user_id',$id)->where('status',2)->get();
        return view('frontend.pages.user-profile',$data);
    }

    
    
  }
