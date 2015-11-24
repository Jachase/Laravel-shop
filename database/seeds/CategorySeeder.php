<?php
use Carbon\Carbon;
use App\Models\Frontend\Category;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/5
 * Time: 下午3:02
 */
class CategorySeeder extends BaseSeeeder
{
    public function run()
    {
        $tableName = Category::getInstance()->getTable();
        $this->truncate($tableName);
        $category = $this->data();
        $time = Carbon::now()->getTimestamp();
        array_walk($category, function(&$v)use($time){
            $this->parserTimeColumn($v, $time);
        });
        Category::insert($category);
    }

    private function data()
    {
        return [
            [
                'id'=>1,
                'name'=>'php',
                'short_name'=>'php',
                'en_name'=>'php',
                'uid'=>1,
                'pid'=>0
            ],
            [
                'id'=>2,
                'name'=>'linux',
                'short_name'=>'linux',
                'en_name'=>'linux',
                'uid'=>1,
                'pid'=>0
            ],
            [
                'id'=>3,
                'name'=>'javascript',
                'short_name'=>'js',
                'en_name'=>'javascript',
                'uid'=>1,
                'pid'=>0
            ],
            [
                'id'=>4,
                'name'=>'laravel',
                'short_name'=>'lv',
                'en_name'=>'laravel',
                'uid'=>1,
                'pid'=>1
            ],
            [
                'id'=>5,
                'name'=>'thinkPHP',
                'short_name'=>'tp',
                'en_name'=>'thinkPHP',
                'uid'=>1,
                'pid'=>1
            ],
            [
                'id'=>6,
                'name'=>'jQuery',
                'short_name'=>'jq',
                'en_name'=>'jQuery',
                'uid'=>1,
                'pid'=>3
            ],
            [
                'id'=>7,
                'name'=>'CentOS',
                'short_name'=>'cent',
                'en_name'=>'CentOS',
                'uid'=>1,
                'pid'=>2
            ],
            [
                'id'=>8,
                'name'=>'Ubuntu',
                'short_name'=>'乌邦图',
                'en_name'=>'Ubuntu',
                'uid'=>1,
                'pid'=>2
            ]
        ];
    }
}