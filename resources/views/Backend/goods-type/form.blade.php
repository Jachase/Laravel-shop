@extends("Backend.layouts.master")
@section("link")
    @parent
    <link rel="stylesheet" href="{{ asset('css/datetimepicker.css') }}">
    @overwrite
@section("content")
    <div class="place bg-info">
        <span>位置</span>
        <ul>
            <li><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;">商品管理</a></li>
            <li>添加分类</li>
        </ul>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">添加分类</a></li>
        </ul>
        <p></p>
        <div class="row">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-1">父级分类</label>
                    <div class="col-md-5 fix-input">
                        <select name="parent_id">
                            <option value="0">顶级分类</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">分类名称</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">关键字</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="keywords">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">计量单位</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="measure_unit">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">简介</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="goods_desc" rows="6"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">模板文件</label>
                    <div class="col-md-4">
                        <input class="form-control" type="text" name="template_file">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">分级</label>
                    <div class="col-md-1">
                        <input type="text" name="measure_unit" value="100" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">排序</label>
                    <div class="col-md-1">
                        <input type="text" name="sort_order" value="100" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">导航显示</label>
                    <div class="col-md-11 fix-input">
                        <input type="radio" name="show_in_nav" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="show_in_nav" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">前台显示</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_show" value="1" checked><span>是&nbsp;</span>
                        <input type="radio" name="is_show" value="0"><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">筛选属性</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="filter_attr">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">提&nbsp;交</button>

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