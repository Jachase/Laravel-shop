<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_name')->comment("分类名称");
            $table->string('keywords')->comment('分类的关键字');
            $table->string('cat_desc')->comment('分类描述');
            $table->unsignedInteger('parent_id')->default(0)->comment("该分类的父id");
            $table->tinyInteger('sort_order')->default(0)->comment('排序');
            $table->string('template_file', 50);
            $table->string('measure_unit', 15)->comment("计量单位");
            $table->tinyInteger('show_in_nav', FALSE, TRUE)->default('0')->comment("显示在导航栏? 0不|1显示");
            $table->string('style', 150);
            $table->tinyInteger('is_show', FALSE, TRUE)->default('1')->comment("前台页面显示? 1显示|0不");
            $table->tinyInteger('grade')->comment("分类的最高和最低价之间的价格分级");
            $table->string('filter_attr')->comment("goods_attrs.id");

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
        Schema::dropIfExists('categories');
    }
}
