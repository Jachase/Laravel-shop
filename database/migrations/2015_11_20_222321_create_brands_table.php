<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品品牌信息记录表
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand_name')->comment("品牌名称");
            $table->string('brand_logo');
            $table->text('brand_desc')->comment("品牌描述");
            $table->string('site_url')->comment("品牌的网址");
            $table->tinyInteger('is_show', FALSE, TRUE)->comment("显示? 0否|1显示");

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
        Schema::drop('brands');
    }
}
