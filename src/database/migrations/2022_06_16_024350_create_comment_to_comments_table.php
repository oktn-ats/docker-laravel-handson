<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_to_comments', function (Blueprint $table) {
          $table->char('comment_to_comment_id', 255)->autoIncrement(false);
          $table->primary('comment_to_comment_id',);
          $table->char('article_id', 255);
          $table->char('comment_contents', 255);
          $table->tinyInteger('delete_flag');
          $table->char('parent_id', 255);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_to_comments');
    }
};
