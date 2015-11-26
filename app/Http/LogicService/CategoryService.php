<?php namespace App\Http\LogicService;
use App\Exceptions\InvalidParamsExceptions;
use App\Helpers\ErrorCode;
use App\Models\Category;

class CategoryService extends BaseLogicService {

    private static $_instance;

    /**
     * @return CategoryService
     */
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }

    public function getCategorySelectTree($pid=0)
    {
        $query = Category::show();
        if($pid > 0)
            $query->child($pid);
        $data = $query->get();

        if($data->isEmpty()) return [];

        return $this->_formatTree($data->toArray());

    }

    private function _formatTree($data, $pid=0)
    {
        $tree = [];

        foreach($data as $item) {
            if($item['parent_id'] === $pid) {
                $tree[$item['id']] = $item;
            }
            if(isset($tree[$item['id']]) ) {
                $tree[$item['id']]['child'] = $this->_formatTree($data, $item['id']);
            }
        }

        return $tree;
    }
}