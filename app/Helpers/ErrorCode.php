<?php namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/26
 * Time: 下午1:59
 */
class ErrorCode {

    private static $_instance;

    /**
     * @return ErrorCode
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