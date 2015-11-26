@extends("Backend.layouts.master")
@section("link")
    @parent
    <link rel="stylesheet" href="{{ asset('css/datetimepicker.css') }}">
    @overwrite
@section("content")
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">添加品牌</a></li>
        </ul>
        <p></p>
        <div class="row">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-1">品牌名称</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="brand_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">上传logo</label>
                    <div class="col-md-8 fix-input">
                        <input type="file" name="brand_logo">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">品牌介绍</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="brand_desc" rows="6"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">链接地址</label>
                    <div class="col-md-6">
                        <input class="form-control" name="site_url">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">前台显示</label>
                    <div class="col-md-5 fix-input">
                        <input type="radio" name="is_show" value="1" checked>是&nbsp;
                        <input type="radio" name="is_show" value="0">否
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
        });

    </script>
    @overwrite