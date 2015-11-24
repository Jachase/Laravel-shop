<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->date('birthday')->comment("生日日期");
            $table->tinyInteger('sex', FALSE, TRUE)->comment("性别 0保密|1男|2女");
            $table->string('telephone');
            $table->decimal('user_money', 10, 2)->comment("用户现有资金");
            $table->decimal('frozen_money', 10, 2)->comment("用户冻结资金");
            $table->timestamp('last_login')->comment("最后一次登录时间");
            $table->string('last_ip')->comment("最后一次登录ip");
            $table->string('question')->comment("安全问题");
            $table->string('answer')->comment("安全答案");
            $table->unsignedInteger('pay_points')->comment("消费积分");
            $table->unsignedInteger('rank_points')->comment("rank_points");
            $table->unsignedInteger('address_id')->comment("收货信息address.id");
            $table->unsignedInteger('user_rank_id')->comment("会员登记user_rank.id");
            $table->unsignedInteger('visit_count')->comment("登录次数");
            $table->tinyInteger('user_rank', FALSE, TRUE);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
