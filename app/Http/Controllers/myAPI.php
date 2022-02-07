<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use Validator;

class myAPI extends Controller
{
    function putLikes(Request $request) {

        $article = Article::firstwhere('id', $request->article_id);
        $article->likes += 1;
        $article->save();
        return response()->json(['likes' => $article->likes ]);

    }

    function postComment(Request $request) {

        $validator = Validator::make($request->all(),[
              'article_id'=>'required',
              'subject'=>'required',
              'body'=>'required'
        ]);

        if(!$validator->passes()){
              return response()->json(['status'=>0, 'msg'=>'ValidationException: Не заполнено одно из полей.']);
        }else{
            $comment = new Comment;
            $comment->article_id = $request->article_id;
            $comment->subject = $request->subject;
            $comment->body = $request->body;
            
            if( $comment->save() ){
                  return response()->json(['status'=>200, 'msg'=>'Success']);
              }
        }
    }
}
