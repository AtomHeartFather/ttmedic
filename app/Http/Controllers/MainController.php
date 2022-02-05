<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class MainController extends Controller
{

    public function home() {
        $articles = Article::latest()->take(6)->get();
        return view('home', ['articles' => $articles]);
    }

    public function articles() {
        return view('articles');
    }

    public function article($article) {
        return view('article', ['article_number' => $article]);
    }

}
