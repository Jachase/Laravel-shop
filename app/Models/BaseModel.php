<?php
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/4
 * Time: 下午2:16
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * ORM存储时间字段为unix时间戳
     *
     * @var string
     */
//    protected $dateFormat = 'U';

    /**
     * 添加自定义的时间字段
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}