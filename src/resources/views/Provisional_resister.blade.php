
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/new_create_user.css">
  </head>
  <body>
    <div class="display">
      <div class="main">新規会員登録</div>
      <form action="/resister_user" method="post">
        @csrf
      <input type="text" id="input_address" class="input_text inner_size" name="mail_address"  onblur="validation_address()"><br><!-- バリデーションで弾く　オンフォーカスではじく-->
      <div>登録いただくメールアドレスを入力してください</div>
      @error('mail_address')<div class='errors'  align='center'>{{ $message }}</div>@enderror<!-- 追加 -->
      <input type="submit" id="submit_button" class="input_text send_address" value="登録">
      <!--<input type="submit" id="submit_button" class="input_text send_address" value="メール送信" onclick="send_date()">-->
      </form>  
    </div>
    </div>
  <!-- <script -->
  <!-- src="https://code.jquery.com/jquery-3.6.0.min.js" -->
  <!-- integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" -->
  <!-- crossorigin="anonymous"></script> -->
  <!-- <script type="text/javascript" src="../JavaScript/provisional_resister.js"></script> -->
  </body>
</html>