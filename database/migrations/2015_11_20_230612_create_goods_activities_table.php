<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //拍卖活动和夺宝奇兵活动配置信息表
        Schema::create('goods_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('act_name')->comment("促销活动名称");
            $table->text('act_desc')->comment("促销活动的描述");
            $table->tinyInteger('act_type');
            $table->unsignedInteger('goods_id')->comment("参加活动商品id");
            $table->unsignedInteger('product_id')->default(0);
            $table->string('goods_name')->comment("商品名称");
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->tinyInteger('is_filished', FALSE, TRUE)->comment("结束?");
            $table->text('ext_info')->comment("序列化后的促销活动的配置信息，包括最低价，最高价，出价幅度，保证金等");
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
        Schema::drop('goods_activities');
    }
}
