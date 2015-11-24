<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品的扩展分类
        Schema::create('goods_cats', function (Blueprint $table) {
            $table->unsignedInteger('goods_id');
            $table->unsignedSmallInteger('cat_id')->comment("商品分类categories.id");
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['goods_id', 'cat_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods_cats');
    }
}
