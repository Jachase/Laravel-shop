<?php namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/26
 * Time: 下午7:59
 */
class ViewHelper {

    private static $_instance;
    private $repeat = "&nbsp;&nbsp;&nbsp;&nbsp;";

    /**
     * @return ViewHelper
     */
    public static function getInstance()
    {
        if(!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }

    public function categoryTreeSelect($data, $grade=0)
    {
        if(empty($data)) return [];
        $return = [];
        $key = $grade;
        foreach($data as $item) {
            $item['name'] = str_repeat($this->repeat, $key).$item['cat_name'];
            $return[] = $item;
            $grade++;
            $temp = $this->categoryTreeSelect($item['child'], $grade);
            array_splice($return, count($return), 0, $temp);
            $grade = $key;
        }
        return $return;
    }

}