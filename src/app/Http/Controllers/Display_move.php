<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Display_move extends Controller
{
  public function post_article() {
   
    // return app('url')->route($name, $parameters, $absolute);
    // echo session()->get('login_name');
    return view('article_post');

  }
}
