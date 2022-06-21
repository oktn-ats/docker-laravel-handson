<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class post_result extends Controller
{
  public function main_display() {

    $article_DB = DB::table('articles')->get();
    
    $resister_user = DB::table('user_tables')->whereMonth('created_at', date('m'))->get();
    // var_dump($resister_user);
    // echo $article_DB->count();
  
    $article_post = DB::table('articles')->whereMonth('created_at', date('m'))->get();

    return view('sub_display', compact('article_DB','resister_user', 'article_post')); 
    
  }

}
