<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $category = Category::limit(10)->latest()->get();
        $posts = Post::limit(6)->inRandomOrder()->get();
        $popular_news = Post::limit(5)->inRandomOrder()->get();
        $latest_news = Post::limit(6)->where('$id', '>', '8');

        return view('welcome', compact('category', 'posts','latest_news','popular_news'));
    }


    public function article($id)
    {
        $posts = Post::limit(3)->where('id', '!=', $id)->inRandomOrder()->get();
        $category = Category::limit(5)->latest()->get();
        $popular_news = Post::limit(5)->inRandomOrder()->get();
        $post = Post::find($id);

        return view('front.article',compact('category', 'post', 'posts','popular_news'));
    }
    public function contact()
    {
        $category = Category::limit(5)->latest()->get();

        return view('front.contact',compact('category'));
    }

    public function posts($id)
    {
        $popular_news = Post::limit(5)->where('id', '!=', $id)->inRandomOrder()->get();

        $latest_news = Post::limit(9)->where('category_id',$id)->latest()->get();
        $category = Category::limit(5)->latest()->get();
        
        return view('front.posts',compact('category','latest_news','popular_news'));
    }
}
