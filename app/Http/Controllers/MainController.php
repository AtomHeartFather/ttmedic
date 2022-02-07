<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Comment;

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
        $comment = new Comment;
        $comment->article_id = $request->article_id;
        $comment->subject = $request->subject;
        $comment->body = $request->body;
        $comment->save();
        return 1;
    }

}
