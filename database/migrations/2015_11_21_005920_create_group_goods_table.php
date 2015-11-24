<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品配件配置表
        Schema::create('group_goods', function (Blueprint $table) {
            $table->unsignedInteger('parent_id')->comment("父商品id");
            $table->unsignedInteger('goods_id')->comment("配件商品id");
            $table->decimal('goods_price', 10 ,2)->comment("配件商品价格");
            $table->unsignedInteger('admin_id');
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['parent_id', 'goods_id', 'admin_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('group_goods');
    }
}
