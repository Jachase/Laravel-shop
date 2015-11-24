<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cat_id')->default('0')->comment("文章的分类");
            $table->string('title', 150)->comment("文章题目");
            $table->longText('content')->comment("文章内容");
            $table->string('author', 30)->comment("文章作者");
            $table->string('author_email', 60)->comment("文章作者的email");
            $table->string('keywords')->comment("文章关键字");
            $table->tinyInteger('post_type', FALSE, TRUE)->default('2')->comment("文章类型 0|普通|1置顶|>=2为保留文章,不能删除");
            $table->tinyInteger('is_open', FALSE, TRUE)->default('1')->comment("显示? 1显示|0不显示");
            $table->string('file_url')->comment("上传文件或者外部文件的url");
            $table->tinyInteger('open_type', FALSE, TRUE)->comment("0正常|1or2添加一个链接“相关下载”=file_url");
            $table->string('link')->comment("引用链接");
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
