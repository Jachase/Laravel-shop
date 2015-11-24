<?php namespace App\Http\Controllers\Backend;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/23
 * Time: 下午5:25
 */
class DashboardController extends BackendController {

    public function getIndex()
    {
        return $this->view("main");
    }

    public function getTop()
    {
        return $this->view("layouts._partial.top");
    }

    public function getLeft()
    {
        return $this->view("layouts._partial.left");
    }

    public function getMain()
    {
        return $this->view("index");
    }

    public function getStatistics()
    {
        return $this->view("default");
    }
}