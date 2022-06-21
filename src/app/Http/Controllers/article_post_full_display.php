<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Article;

use Illuminate\Support\Facades\DB;


class article_post_full_display extends Controller
{
    public function full_display_move(Request $request)
    {
      // echo $request['send_article_id'];

      $search_id = $request['send_article_id'];

      // $search_article = DB::table('comments')->where('article_id', $search_id)->get();
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
        $judge = true;
        // $search_comment = DB::table('comments')->where('article_id', $search_id)->get();
        return view("child_full_display", compact('search_article', 'search_comment', 'judge'));
      }else {

        $judge = false;
        return view("child_full_display", compact('search_article', 'judge'));
      }
// 
        // return view('fullarticle');
// 
      // }else {
        // $jugde_var = "not_exist";
        // return view('fullarticle');
      // }
    }

}
