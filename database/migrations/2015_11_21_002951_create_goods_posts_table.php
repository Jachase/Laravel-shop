<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_posts', function (Blueprint $table) {
            $table->unsignedInteger('goods_id')->defaule('0');
            $table->unsignedInteger('post_id')->defaule('0');
            $table->unsignedInteger('admin_id')->defaule('0');
            $table->primary(['goods_id', 'post_id', 'admin_id']);

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
        Schema::drop('goods_posts');
    }
}
