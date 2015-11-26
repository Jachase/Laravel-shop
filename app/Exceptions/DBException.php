<?php namespace App\Exceptions;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/26
 * Time: 下午2:25
 */
class DBException {

    private static $_instance;

    /**
     * @return DBException
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