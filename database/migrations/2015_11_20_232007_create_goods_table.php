<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品表
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cat_id')->comment("categories.id");
            $table->string('goods_sn', 60)->default('')->comment("商品唯一货号");
            $table->string('goods_name', 120)->comment("商品名称");
            $table->string('goods_name_style', 60)->default('');
            $table->unsignedInteger('click_amount')->default('0')->comment("点击次数");
            $table->unsignedInteger('brand_id')->comment("品牌brands.id");
            $table->string('provider_name', 100)->comment("供应者名称");
            $table->unsignedSmallInteger('goods_number')->comment("商品库存数量");
            $table->decimal('goods_weight', 10, 3)->default('0.000')->comment("商品重");
            $table->decimal('market_price', 10, 2)->default('0.00')->comment("市场价");
            $table->decimal('shop_price', 10, 2)->default('0.00')->comment("本店价");
            $table->decimal('promote_price', 10 ,2)->default('0.00')->comment("促销价");
            $table->timestamp('promote_start_date')->default('0000-00-00 00:00:00')->comment("促销开始时间");
            $table->timestamp('promote_end_date')->default('0000-00-00 00:00:00')->comment("促销结束时间");
            $table->unsignedInteger('warn_number')->default('1')->comment("库存警告数量");
            $table->string('keywords')->default('');
            $table->string('goods_brief')->default('')->comment("商品摘要");
            $table->text('goods_desc')->comment("商品介绍");
            $table->unsignedInteger('img_id')->default('0');
            $table->tinyInteger('is_real', FALSE, TRUE)->default('1')->comment("实物?|1是|0不是");
            $table->string('extension_code')->default('')->comment("扩展属性,如虚拟卡");
            $table->tinyInteger('is_on_sale', FALSE, TRUE)->default('1')->comment("开放销售?|1是|0不是");
            $table->tinyInteger('is_alone_sale', FALSE, TRUE)->default('1')->comment("单独销售?|1是|0不是");
            $table->tinyInteger('is_shipping', FALSE, TRUE)->default('0');
            $table->unsignedInteger('integral')->default('0')->comment("可积分抵扣");
            $table->unsignedSmallInteger('sort_order')->default('0')->comment("排序");
            $table->tinyInteger('is_best', FALSE, TRUE)->default('0')->comment("精品?");
            $table->tinyInteger('is_new', FALSE, TRUE)->default('0')->comment("新品?");
            $table->tinyInteger('is_hot', FALSE, TRUE)->default('0')->comment("热销?");
            $table->tinyInteger('is_promote', FALSE, TRUE)->default('0')->comment("特价?");
            $table->tinyInteger('bonus_type_id', FALSE, TRUE)->default('0')->comment("红利类型");
            $table->unsignedSmallInteger('goods_type')->default('0')->comment("goods_type.id");
            $table->string('seller_note')->default('')->comment("商家备注");
            $table->integer('give_integral')->default('-1')->comment("赠送积分");
            $table->integer('rank_integral')->default('-1')->commet("积分等级");
            $table->unsignedSmallInteger('suppliers_id')->nullable()->comment("供应商id");
            $table->tinyInteger('is_check')->nullable()->comment("审查?");

            $table->timestamps();
            $table->softDeletes();

            $table->index('goods_sn');
            $table->index('cat_id');
            $table->index('brand_id');
            $table->index('goods_weight');
            $table->index('promote_start_date');
            $table->index('promote_end_date');
            $table->index('goods_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
