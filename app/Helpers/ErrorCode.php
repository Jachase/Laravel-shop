<?php namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/26
 * Time: 下午1:59
 */
class ErrorCode {

    const NORMAL_SUCCESS                    = 10000; //通用成功

    const NORMAL_INVALID_PARAMETERS         = 30000; //通用参数不合法
    const MISS_PARAMETERS                   = 30001; //缺少参数
    const INVALID_CAPTCHA                   = 30003; //验证码错误

    const NORMAL_NOT_PERMITTED              = 40000; //通用权限不足

    const DB_FAILURE                        = 50000; //数据库错误
    const NORMAL_FAILURE                    = 50001; //通用失败
    const REGISTER_FAIL                     = 50002; //用户注册失败
    const RESOURCE_NOT_EXISTS               = 50003; //请求的资源不存在(如商家不存在、circle不存在、菜品不存在等)
    const REQUEST_PAGE_NOT_EXISTS           = 50004; //请求的页面不存在

}