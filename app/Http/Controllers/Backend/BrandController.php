<?php namespace App\Http\Controllers\Backend;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/25
 * Time: 下午5:10
 */
class BrandController {

    private static $_instance;

    /**
     * @return BrandController
     */
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }

}