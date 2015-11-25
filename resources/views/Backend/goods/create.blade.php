@extends("Backend.layouts.master")
@section("content")
    <div class="place bg-info">
        <span>位置</span>
        <ul>
            <li><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;">商品管理</a></li>
            <li>添加商品</li>
        </ul>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">添加商品</a></li>
        </ul>
        <p></p>
        <div class="row">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-1">商品名称</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">分类</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">类别</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">品牌</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">关键字</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">商品摘要</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">商品介绍</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">供应者</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">市场价格</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">本店价格</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">促销价格</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">开始时间</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">结束时间</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">库存数量</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1">库存警告</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
@overwrite