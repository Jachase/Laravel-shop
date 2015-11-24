<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_name');
            $table->tinyInteger('cat_type')->default('1')->comment("分类类型 1普通|2系统3网店信息|4帮助|5网店帮助");
            $table->string('keywords')->comment("分类关键字");
            $table->string('cat_desc')->comment("分类说明");
            $table->tinyInteger('sort_order', FALSE, TRUE);
            $table->tinyInteger('show_in_nav', FALSE, TRUE)->default('0')->comment("导航栏显示? 0否|1是");
            $table->unsignedInteger('parent_id')->default('0')->comment("父级id");
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
        Schema::drop('post_cats');
    }
}
