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
        $articles = Article::paginate(10);
        return view('articles', ['articles' => $articles]);
    }

    public function article($article_id) {
        $article = Article::firstwhere('id', $article_id);
        $tags = $article->tags()->get();
        return view('article', compact('article', 'tags'));
    }

    public function like(Request $request) {
        $article = Article::firstwhere('id', $request->article_id);
        $article['likes'] += 1;
        $article->save(); 
        return $article['likes'];
    }

    public function comment(Request $request) {
        // $request->validate([
        //     'theme' => 'required',
        //     'text' => 'required'
        // ]);
        return 1;
    }

}
