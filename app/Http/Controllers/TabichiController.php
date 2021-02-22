<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabichiController extends Controller
{
    public function index(){
        if(Auth::user()->isA('superadmin') || Auth::user()->isAn('editor')){
            // all articles in the blog
            $articles = article::all();
            $articlesCount = $articles->count();

            // all users in the blog
            $users = User::all();
            $usersCount = $users->count();

            // all categories in the blog
            $cats = category::all();
            $catsCount = $cats->count();

            $images = article::orderBy('created_at', 'desc')->get()->pluck('image');
            $imagesCount = $images->count();

            return view('tabichi.index', compact('articlesCount','articles', 'usersCount', 'catsCount', 'imagesCount'));
        }
        $articles = article::orderBy('created_at', 'desc')->paginate(15);
        $random_articles = $articles->random(1);

        $users = User::all();
        $people = $users->random(1);

        return view('Article.index', compact('articles', 'random_articles', 'people'));
    }

    public function contact(){
    	return view('tabichi.contact');
    }
    public function blog(){
    	return view('tabichi.blog');
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
