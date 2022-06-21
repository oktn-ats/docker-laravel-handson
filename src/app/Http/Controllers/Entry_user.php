<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Preuser;
use Illuminate\Support\Facades\DB;


class Entry_user extends Controller
{
  public function resister() {

    $now_url = url()->full();
    // echo $now_url;
  
    $str = str_replace('http://localhost:8080/new_create_user', '', $now_url);
    $str2 = str_replace('?', '', $str);
    $str3 = str_replace('=', '', $str2);
    $str4 = substr_replace($str3, '"', 0, 0);
  
  
  
    // echo $str3; // -> cde
  
    // $users = DB::table('preusers')
               // ->select(DB::raw('mail_address', 'url_token', 'iv'))
               // ->where('url_token', '=', $str2)
               // ->get();
    
               // echo $users->mail_address;
  
    // データが取れなかった時の処理
    // $users = DB::table('preusers')->Where('url_token',"aaaaa")->get();
               
    $users = DB::table('preusers')->Where('url_token',$str3)->get();
    // echo $users;
  
    $users_address = $users[0]->mail_address;
    $users_token = $users[0]->url_token;
    $users_iv = $users[0]->iv;
  
    return view('create_user', compact('users_address','users_token','users_iv'));
  
    }  
}
