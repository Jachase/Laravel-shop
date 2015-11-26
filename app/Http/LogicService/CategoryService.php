<?php namespace App\Http\LogicService;
class GoodsCategoryService extends BaseLogicService {

    private static $_instance;

    /**
     * @return GoodsCategoryService
     */
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }

    public function createGoodsCategory($data)
    {
        $data = filter_var_array($data, [
            ''
        ]);
    }

}