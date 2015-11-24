<?php namespace App\Http\Controllers\Frontend;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/4
 * Time: 下午1:18
 */
use App\Http\Controllers\Controller;

class FrontendController extends Controller {

    protected function view($template, $data)
    {
        $path = "Frontend.";
        return view($path.$template, $data);
    }
}