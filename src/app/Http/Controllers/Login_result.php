<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DB_user_check;

use App\Models\UserTable;
use App\Models\Article;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class Login_result extends Controller
{
  public function DBcheck(DB_user_check $request) {

    $user_id =  $request['user_ID'];
    $user_pass = $request['user_pass'];

    $output_DB = DB::table('user_tables')->Where('user_name',$user_id)->get();

    $request->session()->flash('status', 'パスワードに誤りがあります');

    session(['login_name' => $user_id]);

    $article_DB = DB::table('articles')->get();

    

    // $resister_user = DB::table('user_tables')->whereMonth('created_at', DATE_FORMAT(NOW(),'%Y-%m-01'))->get();
    $resister_user = DB::table('user_tables')->whereMonth('created_at', date('m'))->get();
    // var_dump($resister_user);
    // echo $article_DB->count();

    $article_post = DB::table('articles')->whereMonth('created_at', date('m'))->get();



    $check_pass = $output_DB[0]->password;
    if (Hash::check($user_pass, $check_pass,)) { 

      // return view('main_display', compact('article_DB','resister_user','resister_user', 'article_post'));  
      return view('sub_display', compact('article_DB','resister_user', 'article_post')); 
      // return view('child');
    }else {
      return view('login_display');
    }
  }  
}
