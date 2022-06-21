
<!DOCTYPE html>
  <html>
    <head>
      <title></title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../CSS/article_display.css">
    </head>
    <body>
      <div align="center" class="">記事一覧</div>
      <div align="center">
        ようこそ
        <?php
        echo session()->get('login_name');
        ?>
        さん
      </div>
      <div align="center">
        新規投稿は<a href="/article/new_post">こちら</a>
      </div>
      <div class="auto_display">
        @yield('article_all')  
         </div>
      <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous">
      </script>
    </body>
  </html>