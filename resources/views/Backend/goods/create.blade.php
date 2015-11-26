@extends("Backend.layouts.master")
@section("link")
    @parent
    <link rel="stylesheet" href="{{ asset('css/datetimepicker.css') }}">
    @overwrite
@section("content")
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">添加商品</a></li>
        </ul>
        <p></p>
        <div class="row">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-1">商品名称</label>
                    <div class="col-md-6">
                        <div class="col-md-11 input-group">
                            <input type="text" class="form-control" name="name">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">上传图片</label>
                    <div class="col-md-8 fix-input">
                        <input type="file">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">分类</label>
                    <div class="col-md-4 fix-input">
                        <select name="cat_id">
                            <option>全部分类</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">类型</label>
                    <div class="col-md-4 fix-input">
                        <select name="goods_type">
                            <option>全部类型</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">品牌</label>
                    <div class="col-md-4 fix-input">
                        <select name="brand_id">
                            <option>全部品牌</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">关键字</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="keywords">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">商品摘要</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="goods_brief" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">商品介绍</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="goods_desc" rows="6"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">供应者</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="provider_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">市场价格</label>
                    <div class="col-md-5">
                        <div class="col-md-4 input-group">
                            <span class="input-group-addon">￥</span>
                            <input type="text" class="form-control" name="market_price">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">本店价格</label>
                    <div class="col-md-5">
                        <div class="col-md-4 input-group">
                            <span class="input-group-addon">￥</span>
                            <input type="text" class="form-control" name="shop_price">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-1">库存数量</label>
                    <div class="col-md-5">
                        <div class="col-md-4 input-group">
                            <input type="text" class="form-control" name="goods_number">
                            <span class="input-group-addon">件</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">商品重量</label>
                    <div class="col-md-5">
                        <div class="col-md-4 input-group">
                            <input type="text" class="form-control" name="goods_weight">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">库存警告</label>
                    <div class="col-md-5">
                        <div class="col-md-4 input-group">
                            <input type="text" class="form-control" name="warn_number">
                            <span class="input-group-addon">件</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">实物?</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_real" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_real" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">开放销售</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_on_sale" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_on_sale" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">单独销售</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_alone_sale" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_alone_sale" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">是否送货</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_shipping" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_shipping" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">积分抵扣</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="integral">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">排序</label>
                    <div class="col-md-1">
                        <input type="text" name="sort_order" value="100" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">精品</label>
                    <div class="col-md-11 fix-input">
                        <input type="radio" name="is_best" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_best" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">新品</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_new" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_new" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">热销</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_hot" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_hot" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">是否促销</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_promote" value="1"><span>是&nbsp;</span>
                        <input type="radio" name="is_promote" value="0" checked><span>否&nbsp;</span>
                    </div>
                </div>
                <div class="form-group promote" style="display: none">
                    <label class="control-label col-md-1">促销价格</label>
                    <div class="col-md-11">
                        <div class="col-md-2 input-group">
                            <span class="input-group-addon">￥</span>
                            <input type="text" class="form-control" name="promote_price">
                        </div>
                    </div>
                </div>
                <div class="form-group form-inline promote" style="display: none">
                    <label class="control-label col-md-1">促销时间</label>
                    <div class="col-md-11">
                        <div class="col-md-3 input-group date promote-start-date">
                            <input type="text" class="form-control" name="promote_start_date" placeholder="开始时间" readonly>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-remove"></span>
                            </span>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <span>至</span>
                        <div class="col-md-3 input-group date promote-end-date">
                            <input type="text" class="form-control" name="promote_end_date" placeholder="结束时间" readonly>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-remove"></span>
                            </span>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">积分赠送</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="give_integral">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">备注</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="seller_note" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary fix-submit">提&nbsp;交</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@overwrite
@section("footer")
    @parent
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
        $(function(){
            checkPromote('is_promote');

            $("input[name='is_promote']").on('click', function(){
                checkPromote(this.name);
            });

            function checkPromote(name){
                if( $("input[name='"+name+"']:checked").val() == 1 ) {
                    $('.promote-start-date').datetimepicker();
                    $('.promote-end-date').datetimepicker();
                    $('.promote').show();
                } else {
                    $('.promote').hide();
                    $('.promote-start-date').datetimepicker('remove');
                    $('.promote-end-date').datetimepicker('remove');
                }
            }
        });

    </script>
    @overwrite