<?php
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/4
 * Time: 下午1:19
 */

namespace App\Http\Controllers\Frontend;


class HomepageController extends FrontendController
{
    public function getIndex()
    {
        return view('welcome');
    }

}