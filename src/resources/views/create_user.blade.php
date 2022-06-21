<!DOCTYPE html>
  <html>
    <head>
      <title></title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../CSS/create_user_info.css">
    </head>
    <body>
      <div class="display">
        <div class="main" align='center'>新規会員登録</div>
          <form action="result_information" align='center'  method="post">  
            @csrf
            <input type="text" align='center' id="input_name" class="input_text inner_size" placeholder="user_nameを半角英数字8文字以上で入力してください" name="user_name" ><br>
            @error('user_name')<div class='errors'  align='center'>{{ $message }}</div>@enderror<!-- 追加 -->
            <!-- <input type="text" id="input_address" align='center' class="input_text inner_size" placeholder="仮登録の際のメールアドレスを入力してください" name="user_address"><br> -->
            <!-- @error('user_address')<div class='errors'  align='center'>{{ $message }}</div>@enderror追加 -->
            <input type="text" id="input_password"  align='center' class="input_text inner_size" placeholder="passwordを半角英数字8文字以上で入力してください"  name="user_password"><br>
            @error('user_password')<div class='errors' align='center'>{{ $message }}</div>@enderror
            <!-- <input type="hidden" name="pre_user_address" value='{{$users_address}}'> -->
            <!-- <input type="hidden" name="pre_user_token" value='{{$users_token}}'> -->
            <!-- <input type="hidden" name="pre_user_iv" value='{{$users_iv}}'><br> -->
            <input type="submit" id="submit_button"  align='center' class="input_text, send_address" value="メール送信">
          </form>  
        </div>
    <!-- <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="../JavaScript/new_create_user.js"></script> -->
    </body>
  </html>
