<?php namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/23
 * Time: 上午12:17
 */
class BackendController extends Controller {

    protected function view($template, $data=[], $templatePath=NULL)
    {
        $path = ($templatePath ?: "Backend").".";
        return view($path.$template, $data);
    }

}