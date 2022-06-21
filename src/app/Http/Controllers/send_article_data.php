<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Http\Requests\Article_Post_Rule;
use Illuminate\Http\DB;
use Illuminate\Support\Str;


class send_article_data extends Controller
{
  public function send_data(Article_Post_Rule $request) {

    $title_content = $request['title_content'];
    // echo $title_content;

    $article_content = $request['article'];
    // echo $article_content;

    $post_user = $request['user'];
    // $output_DB = DB::table('user_tables')->Where('user_name',$user_id)->get();

    $article_id = Str::random(64);
    $delete_flag = 0;

    // echo $article_id;


    $send_article = new Article;
    $send_article->article_id = $article_id;
    $send_article->user_id = $post_user;
    $send_article->title_name= $title_content;
    $send_article->article_contents = $article_content;
    $send_article->delete_flag = $delete_flag;
    $send_article->save();

    return view('post_result');
 
  }
}
