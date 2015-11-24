<?php
use Carbon\Carbon;
use App\Models\Frontend\Article;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/5
 * Time: 下午2:30
 */
class ArticleSeeder extends BaseSeeeder
{
    public function run()
    {
        $this->truncate('articles');
        $article = $this->data();
        $time = Carbon::now()->getTimestamp();
        array_walk($article, function(&$v)use($time){
            $this->parserTimeColumn($v, $time);
        });
        Article::insert($article);
    }

    private function data()
    {
        return [
            [
                'id'=>1,
                'catid'=>1,
                'typeid'=>0,
                'title'=>'test article name',
                'description'=>'just test description',
                'keywords'=>'my,xx',
                'author'=>1,
                'content'=>e('* object_type 可取值: {@see \App\Helpers\LookUp::item}
 * <br />
 * 若被 collected 的是商家，则 parent 为商家
 * <br />
 * 若被 collected 的是菜品，则 parent 为商家
 * <br />
 * 若被 collected 的是图片/视频，则 parent 为商家或帖子
 * <br />
 * 若被 collected 的对象自身就是 collection，则collect该对象的来源'),
                'tag'=>'laravel',
                'status'=>0,
                'listorder'=>0,
            ],
            [
                'id'=>2,
                'catid'=>1,
                'typeid'=>0,
                'title'=>'test article name 22222',
                'description'=>'2222 just test description',
                'keywords'=>'my,xx,22',
                'author'=>1,
                'content'=>e('* 22object_type 可取值: {@see \App\Helpers\LookUp::item}
 * 2<br />
 * 2若被 collected 的是商家，则 parent 为商家
 * 2<br />
 * 2若被 collected 的是菜品，则 parent 为商家
 * 2<br />
 * 2若被 collected 的是图片/视频，则 parent 为商家或帖子
 * 2<br />
 * 2若被 collected 的对象自身就是 collection，则collect该对象的来源'),
                'tag'=>'laravel5.1',
                'status'=>0,
                'listorder'=>0,
            ]
        ];
    }
}