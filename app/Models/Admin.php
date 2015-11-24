<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Admin extends BaseModel implements AuthenticatableContract, CanResetPasswordContract
{
    use SoftDeletes,Authenticatable, CanResetPassword;
    private static $_instance;
    protected $table = 'admins';
    protected $guarded = ['id'];

    /**
     * @return Admin
     */
    public static function getInstance()
    {
        if(!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }
}
