<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Article;
use App\Category;
use App\Role;
use App\News;

class TabichiController extends Controller
{
    public function index(){
        if(Auth::id() == 1){
            // all articles in the blog
            $articles = article::all();
            $articlesCount = $articles->count();

            // all users in the blog
            $users = User::all();
            $usersCount = $users->count();

            // all categories in the blog
            $cats = category::all();
            $catsCount = $cats->count();
            $news = News::orderBy('created_at', 'desc')->paginate(3);
            $images = article::orderBy('created_at', 'desc')->get()->pluck('image');
            $imagesCount = $images->count();

            return view('tabichi.index', compact('articlesCount','articles', 'usersCount', 'catsCount', 'news','imagesCount'));
        }
        $articles = article::orderBy('created_at', 'desc')->paginate(15);
        $random_articles = $articles->random(1);
        $news = News::orderBy('created_at', 'desc')->paginate(3);
        $users = User::all();
        $people = $users->random(1);

        return view('tabichi.index', compact('articles', 'random_articles', 'people','news'));
    }

    public function contact(){
    	return view('tabichi.contact');
    }
    public function blog(){
         // all articles in the blog
         $articles = article::orderBy('created_at', 'desc')->paginate(3);

         // all users in the blog
         $users = User::all();
         // all categories in the blog
         $categories = category::all();
         $images = article::orderBy('created_at', 'desc')->get()->pluck('image');
    

    	return view('tabichi.blog', compact('articles', 'categories','images','users'));
    }
    public function testimonials(){
    	return view('tabichi.testimonials');
    }
    public function story(){
    	return view('tabichi.story');
    }
    public function about(){
    	return view('tabichi.about');
    }
}
