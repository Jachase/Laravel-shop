<?php

use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends BaseSeeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CategorySeeder::class);

        Model::reguard();
    }
}
