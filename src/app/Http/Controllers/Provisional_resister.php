<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preuser;
use Illuminate\Support\Str;
use App\Http\Requests\PreUserValidate;
use Illuminate\Support\Facades\Mail;


class Provisional_resister extends Controller
{
  public function index(PreUserValidate $request) {
        
    // echo $request['user_address'];


    // 暗号化するデータ
    $user_address = $request['mail_address']; 
  
    // echo $user_address;
    
    //メール送信
    // 暗号化パスワード
    $password = 'secpass';

    // 暗号化方式
    $method = 'aes-256-cbc';
    
    // 方式に応じたIVに必要な長さを取得 ランダムな文字列
    $ivLength = openssl_cipher_iv_length($method);
  
    // IV を自動で生成
    $iv = openssl_random_pseudo_bytes($ivLength);
    
    // OPENSSL_RAW_DATA と OPENSSL_ZERO_PADDING を指定可
    $options = 0;
  
    
    // 暗号化
    $encrypted = openssl_encrypt($user_address, $method, $password, $options, $iv);
    $base64_str_encode = base64_encode("$iv");

    $access_token = Str::random(64);


    $url = "http://localhost:8080/new_create_user/?".$access_token;
    //echo $url;
    //echo base64_decode($url);
    //$url = "http://localhost:8080/signup.php?urltoken=.$urltoken;
    $send_mail = [
      '仮登録を受け付けました。
      本登録用のURLを記載しておりますので
      下記のリンクより本登録をお願いします。
      '.$url];

      // Mail::raw("test", function($message){
      // $message->to("oktn.ats@gmail.com")->subject('仮登録完了のお知らせ');});

      // $user = User::findOrFail($id);

      $user =$user_address;

      $ret = Mail::raw($send_mail[0], function ($message) use ($user) {
        $message->to($user)->from('oktn.ats@gmail.com')->subject('仮登録完了のお知らせ');
      });
      
      // Mail::raw('emails.reminder', ['user' => $user], function ($m) use ($user) {
          // $m->from('hello@app.com', 'Your Application');
// 
          // $m->to($user->user)->subject('Your Reminder!');
      // });
    // }
      // Mail::send("emails.test", function($message){
      // $message->to("oktn.ats@gmail.com")->subject('仮登録完了のお知らせ');});


    
      // $id = str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz0123456789');
      
      // if (mb_send_mail($user_address, '仮登録完了のお知らせ', $send_mail[0])) {
  // 
        $Provisional_user = new Preuser;
        $Provisional_user->mail_address = $encrypted;
        $Provisional_user->url_token = $access_token;
        $Provisional_user->iv = $base64_str_encode;
        $Provisional_user->delete_flag = 0;
        $Provisional_user->save();
// 
    // 
           return view('tenporary_user_result');
      // }

      
     // 復号化
     //$decrypted = openssl_decrypt($encrypted, $method, $password, $options, $iv);
     //echo "<br>";
     //echo $decrypted;
  }  
} 
// }