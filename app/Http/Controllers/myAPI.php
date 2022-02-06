<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class myAPI extends Controller
{
    function putLikes(Request $request) {

        $article = Article::firstwhere('id', $request->article_id);
        $article->likes += 1;
        $article->save();
        return ['likes' => $article->likes ];

    }
}
