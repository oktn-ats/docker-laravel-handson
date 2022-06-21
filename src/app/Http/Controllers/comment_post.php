<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class comment_post extends Controller
{
    public function comment_post(Request $request)
    {
      
      $search_id = $request['send_article_id'];

      $comment_id = Str::random(64);


      $comment_post = new Comment;
      $comment_post->comment_id = $comment_id;
      $comment_post->article_id = $search_id;
      $comment_post->user_id = $request['comment_user'];
      $comment_post->comment_contents = $request['comment'];
      $comment_post->parent_id = 000;
      $comment_post->delete_flag = 0; 
      $comment_post->save();

      $search_article2 = DB::table('articles')->where('article_id', $search_id)->get(); 
      $search_article = DB::table('articles')->where('article_id', $search_id)->first();
      // echo $search_article[0]->article_id;

      // var_dump($search_article2);
      // echo "<br>";
      // echo $search_article2[0]->article_id;
      // echo "<br>";
      // var_dump($search_article);
      // echo "<br>";
      // echo $search_article->article_id;

      if (DB::table('comments')->where('article_id', $search_id)->exists()) {

        $search_comment = DB::table('comments')->where('article_id', $search_id)->get();
        echo $search_comment->count();
        $judge = true;
        // $search_comment = DB::table('comments')->where('article_id', $search_id)->get();
        return view("child_full_display", compact('search_article', 'search_comment', 'judge'));

      }

    }

  }
