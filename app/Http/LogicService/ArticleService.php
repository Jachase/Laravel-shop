<?php namespace App\Http\LogicService;
use App\Models\Frontend\Article;

/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/6
 * Time: 下午1:02
 */
class ArticleService extends BaseLogicService
{
    private static $_instance;

    /**
     * @return ArticleService
     */
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }
        return self::$_instance;
    }

    public function find($id)
    {
        $article = Article::find($id);
        return $article;
    }
}