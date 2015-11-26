<?php namespace App\Exceptions;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/26
 * Time: 下午1:51
 */
class InvalidParamsExceptions {

    private static $_instance;

    /**
     * @return InvalidParamsExceptions
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