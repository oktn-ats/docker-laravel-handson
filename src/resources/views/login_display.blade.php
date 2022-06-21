<!DOCTYPE html>
  <html>
    <head>
      <title></title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../CSS/login_display.css">
    </head>
    <body>
    <div align="center" class="pos_change font_ch">ログイン画面</div>
    </div>
      <div id="display_pos"  class="all_display">
        <form align="center" class="pos_change" action="{{Route('login_result')}}" method="post">
          @csrf
          <input type="text"align='center' name="user_ID"  class="font_size_ch pos_change" placeholder="半角英数字8文字以上でユーザーネームを入力してください"><br>
          <!-- <div align='center'>ユーザーIDを入力してください</div>オンフォーカスで文字を消す -->
          @error('user_ID')<div class='errors'  align='center'>{{ $message }}</div>@enderror<!-- 追加 -->
          <input type="text" align='center' name="user_pass" class="font_size_ch pos_change" placeholder="半角英数字8文字以上でパスワードを入力してください"><br>
          <!-- <div align='center'>パスワードを入力してください</div> -->
          @error('user_pass')<div class='errors'  align='center'>{{ $message }}</div>@enderror<!-- 追加 -->
          @if (session('status'))
          <div class="errors">
          {{ session('status') }}
        </div>
        @endif
          <div align="center"><input type="submit" class="pos_change" value="ログイン"></div>
        </form>
    </body>
  </html>