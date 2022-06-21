@extends('main_display')
@section('tile' , "記事一覧表示") 
@section('article_all')
  <div align="center">今月の会員数/<?php echo $resister_user->count(); ?></div>
  <div align="center">今月の記事投稿数/<?php echo $article_post->count(); ?></div>


@for ($i=0; $i < $article_DB->count(); $i++) 
  <form action="{{Route('change_display')}}"  method="post">
      @csrf
      <!-- $article_num = $data_set[$i]["article_id"]; -->
      <div align="center" id="main_position" class="article_display">
      <div class="margin_Adjustment">・タイトル<br><?php echo $article_DB[$i]->title_name;?></div>
      <!-- コメント機能追加欄 -->
      <!-- <div class="margin_Adjustment"><?php //echo $article_DB[$i]->article_contents; ?></div> -->
      <div class="margin_Adjustment">・投稿者<br><?php echo $article_DB[$i]->user_id; ?></div>
      <input type="hidden" class="margin_Adjustment" value="<?php echo $article_DB[$i]->article_id; ?>" name="send_article_id">
      <div class="margin_Adjustment">・投稿時間<br><?php echo $article_DB[$i]->created_at; ?></div>
      <input type="submit" class="margin_Adjustment" value="記事全文の表示またはコメントをしたい方はこちら">
      </form>
      </div>
@endfor

@endsection