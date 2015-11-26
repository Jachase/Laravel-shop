<?php namespace App\Models;

use App\Exceptions\DBException;
use App\Helpers\ErrorCode;

class Category extends BaseModel {

    private static $_instance;
    protected $table = "categories";
    protected $fillable = ['cat_name', 'keywords', 'cat_desc', 'parent_id', 'srot_order',
        'template_file', 'measure_unit', 'show_in_nav', 'style', 'is_show', 'grade', 'filter_attr'];
    protected $guarded = ['id'];

    public function  scopeShow($query)
    {
        return $query->where("is_show", 1);
    }

    public function scopeChild($query, $parentId=0)
    {
        return $query->where("parent_id", "=", $parentId);
    }

    /**
     * @return Category
     */
    public static function getInstance()
    {
        if(!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }

//    public function store($data)
//    {
//        $model = new self;
//        $model->cat_name = $data['cat_name'];
//        $model->keywords = $data['keywords'];
//        $model->cat_desc = $data['cat_desc'];
//        $model->parent_id = $data['parent_id'];
//
//        $model->sort_order = $data['sort_order'];
//        $model->template_file = $data['template_file'];
//        $model->measure_unit = $data['measure_unit'];
//        $model->show_in_nav = $data['show_in_nav'];
//        $model->style = $data['style'];
//        $model->is_show = $data['is_show'];
//        $model->grade = $data['grade'];
//        $model->filter_attr = $data['filter_attr'];
//
//        if(!$model->save()) {
//            throw new DBException(ErrorCode::DB_FAILURE);
//        }
//
//        return $model->id;
//    }
}
