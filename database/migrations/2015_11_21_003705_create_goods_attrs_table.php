<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsAttrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //具体商品的属性表
        Schema::create('goods_attrs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('goods_id')->default(0);
            $table->unsignedInteger('attr_id')->default(0)->comment("attributes.id");
            $table->text('attr_value');
            $table->string('attr_price')->comment("该属性对应在商品原价格上要加的价格");

            $table->timestamps();
            $table->index('goods_id');
            $table->index('attr_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods_attrs');
    }
}
