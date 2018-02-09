<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeMadeController extends Controller
{
    public function home(){
        return view('front-end.home.home');
    }
    public function news(){
        return view('front-end.news.news');
    }
    public function newRecipe(){
        return view('front-end.new-recipe.new-recipe');
    }
    public function postRecipe(){
        return view('front-end.post-recipe.post-recipe');
    }
    public function contacts(){
        return view('front-end.contacts.contacts');
    }
    public function privacyPolicy(){
        return view('front-end.privacy-policy.privacy-policy');
    }
}
