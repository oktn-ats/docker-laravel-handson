<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTable;
use App\Http\Requests\User_validate;
use Illuminate\Support\Facades\Hash;

class true_user_entry extends Controller
{
  public function resister(User_validate $request) {


    // 新しいパスワードの長さをバリデート…

   $user_name = $request['user_name']; 
   $user_password = $request['user_password']; 
    // $user_aaaa = $request['pre_user_address']; 
    // $user_vvvv = $request['pre_user_token']; 
    // $user_gggg = $request['pre_user_iv']; 


    $pass = Hash::make($request['user_password']);

    // echo $pass;

    // if (Hash::check('', $pass)) {
      // echo "お疲れ様です";
  // }
    $resister_user = new UserTable;
    $resister_user->user_name = $user_name;
    $resister_user->password =  $pass;

    $resister_user->save();

    
    return view('create_user_result');
    
    // $request->user()->fill([
        // 'user_password' => Hash::make($request->newPassword)
    // ])->save();


// $method = 'aes-256-cbc';

// $str_decoded = base64_decode($user_gggg);


// OPENSSL_RAW_DATA と OPENSSL_ZERO_PADDING を指定可
// $options = 0;

// $decrypted = openssl_decrypt($user_aaaa, $method, $password, $options, $str_decoded);
     //echo "<br>";
    // echo $decrypted;
  }
}
