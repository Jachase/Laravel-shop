<?php namespace App\Http\Controllers\Backend;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/11/23
 * Time: 上午12:16
 */
class GoodsController extends BackendController{

    /**
     * 商品列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return $this->view('goods.index');
    }

    public function getDetail()
    {
        return $this->view('goods.detail');
    }

    public function getList()
    {
        return $this->view('goods.list');
    }
}