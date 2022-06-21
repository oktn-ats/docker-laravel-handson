<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Display_change extends Controller
{
  public function index() {

    return view('start_display');

  }

  public function pre_display() {

    return view('Provisional_resister');

  }

  public function login_display() {

    return view('login_display');

  }

  public function post_article() {
    
    return view('article_post');

  }

  // public function main_display() {

    
  //   return view('main_display');

  // }

  // public function full_display_move(Request $request)
  // {
    // return view('full_article');
  // }
}
