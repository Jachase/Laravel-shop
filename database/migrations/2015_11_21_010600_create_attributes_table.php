<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品类型属性表
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cat_id')->comment("商品类型goods_type.id");
            $table->string('attr_name', 60)->comment("属性名称");
            $table->tinyInteger('attr_input_type', FALSE, TRUE)->default('1')->comment("添加商品时该属性的添加类别；0为手工输入|1为选择输入|2为多行文本输入");
            $table->tinyInteger('attr_type', FALSE, TRUE)->default('1')->comment("属性是否多选；0否|1是；如果可以多选，则可以自定义属性，并且可以根据值的不同定不同的价");
            $table->text('attr_values')->comment("如果attr_input_type为1，即选择输入，则attr_name对应的值的取值就是该字段的值");
            $table->tinyInteger('attr_index', FALSE, TRUE)->default('0')->comment("属性是否可以检索；0，不需要检索；1，关键字检索；2，范围检索；该属性应该是如果检索的话，可以通过该属性找到有该属性的商品");
            $table->tinyInteger('sort_order', FALSE, TRUE)->default('0');
            $table->tinyInteger('is_linked', FALSE, TRUE)->comment("是否推荐关联；0不关联|1关联");
            $table->tinyInteger('attr_group', FALSE, TRUE);
            $table->timestamps();
            $table->softDeletes();

            $table->index('cat_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attributes');
    }
}
