<!DOCTYPE html>
  <html>
    <head>
      <title></title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../CSS/new_create_article.css">
    </head>
    <body>
      <div><a href="{{Route('main_move')}}">記事一覧へ</a></div>
      <div align="center" class="position">
        <form action="{{Route('send_data')}}" method="post" class="border_set">
          @csrf
          <div class="font_change">記事のタイトル</div>
          <input type="text" class="size_change" name="title_content">
          @error('title_content')<div class='errors'  align='center'>{{ $message }}</div>@enderror 
          <div id="title" class="font_change">記事の内容</div>
          <textarea name="article" id="article_content" cols="58" rows="25"></textarea><br>
          @error('article')<div class='errors'  align='center'>{{ $message }}</div>@enderror 
          <input type="hidden" name="user"  value='<?php echo session()->get('login_name')?>'>
          <input type="submit" class="submit_position" value="投稿">
        </form>
      </div> 
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    </body>
  </html>