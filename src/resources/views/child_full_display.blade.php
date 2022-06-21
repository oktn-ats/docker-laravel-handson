@extends('full_article')
@section('post_display')
<div class="display">
        <div align="center" id="main_position" class="article_display">
          <form action="{{Route('insert_comment')}}" method="post">
            @csrf
        　  <div class="margin_Adjustment">・タイトル<br>
            <?php echo $search_article->title_name;?></div>
        　  <!-- コメント機能追加欄 -->
            <div class="margin_Adjustment">・記事内容<br>
        　  <div class="margin_Adjustment" name="contents" ><?php echo $search_article->article_contents; ?></div>
        　  <div class="margin_Adjustment" name="post_user">・投稿者 <br> <?php echo $search_article->user_id; ?></div>
            <div class="margin_Adjustment">・投稿時間 <br> <?php echo $search_article->created_at; ?></div>
        　  <input type="hidden" class="margin_Adjustment" value="<?php echo $search_article->article_id; ?>" name="send_article_id">
            <input type="hidden" name="comment_user" value="<?php echo session()->get('login_name'); ?>">  

        　  @if($judge === false)
              <div class="margin_Adjustment">コメントはありません</div>
            @elseif($judge === true)
              <div class="margin_Adjustment">・コメント <br></div>
              @for($i = 0; $i < $search_comment->count(); $i++)

                <div class="margin_Adjustment">コメント投稿者<br> <?php echo $search_comment[$i]->user_id;?></div>
                <div class="margin_Adjustment"><?php echo $search_comment[$i]->comment_contents?></div>
                <div class="margin_Adjustment">投稿日時<br> <?php echo $search_comment[$i]->created_at?></div>

              @endfor

            @endif

            <textarea class="margin_Adjustment" name="comment" placeholder="コメントを入力してください" cols='40' rows='4' required></textarea><br>
            <!-- <input type="text" class="margin_Adjustment" placeholder="コメントを入力してください"><br> -->
            <input type="submit" class="margin_Adjustment" value="コメント投稿">
        　</form>
        </div>
      </div>
@endsection