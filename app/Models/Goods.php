<?php namespace App\Models;
/**
 * 商品模型
 * Class Goods
 * @package App\Models
 *
 */
class Goods extends BaseModel
{
    private static $_instance;

    /**
     * @return Goods
     */
    public static function getInstance()
    {
        if(!isset(self::$_instance))
        {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }

    public function createGoods($data)
    {
        $model = new self;
        $model->cat_id = $data['cat_id'];
        $model->goods_name = $data['name'];
        $model->brand_id = $data['brand_id'];
        $model->goods_type = $data['goods_type'];
        $model->market_price = $data['market_price'];
        $model->shop_price = $data['shop_price'];
        $model->goods_desc = $data['goods_desc'];
        $model->img_id = $data['img_id'];
        $model->is_real = $data['is_real'];

        $model->goods_name_style = $data['goods_name_style'];
        $model->goods_number = $data['goods_number'];
        $model->goods_weight = $data['goods_weight'];
        $model->promote_price = $data['promote_price'];
        $model->promote_start_data = $data['promote_start_data'];
        $model->promote_end_data = $data['promote_end_data'];
        $model->warn_number = $data['warn_number'];
        $model->keywords = $data['keywords'];
        $model->goods_brief = $data['goods_brief'];
        $model->extension_code = $data['extension_code'];
        $model->is_on_sale = $data['is_on_sale'];
        $model->is_alone_sale = $data['si_alone_sale'];
        $model->shipping = $data['shipping'];
        $model->integral = $data['integral'];
        $model->sort_order = $data['sort_order'];
        $model->is_best = $data['is_best'];
        $model->is_new = $data['is_new'];
        $model->is_hot = $data['is_hot'];
        $model->is_promote = $data['is_promote'];
        $model->bonus_type_id = $data['bonus_type_id'];
        $model->seller_note = $data['seller_note'];
        $model->give_integral = $data['give_integral'];
        $model->rank_integral = $data['rank_integral'];

        if(!$model->save()) {
        }

        return $model->id;
    }
}
