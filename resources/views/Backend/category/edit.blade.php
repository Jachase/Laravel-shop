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
            @if(!empty($errors))
            {{ $errors->first()}}
            @endif
            <form class="form-horizontal" action="{{ url('category') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-md-1">父级分类</label>
                    <div class="col-md-5 fix-input">
                        <select name="parent_id">
                            <option value="0">顶级分类</option>
                            @foreach($category as $item)
                                <option value="{{ $item['id'] }}">
                                    {{ $item['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">分类名称</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="cat_name" value="{{ old('cat_name') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">关键字</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="keywords" value="{{ old('keywords') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">计量单位</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="measure_unit" value="{{ old('measure_unit') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">简介</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="cat_desc" rows="6">{{ old('cat_desc') }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">模板文件</label>
                    <div class="col-md-4">
                        <input class="form-control" type="text" name="template_file" value="{{ old('template_file') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">分级</label>
                    <div class="col-md-1">
                        <input type="radio" name="grade" value="1" @if(old('grade')===1 or is_null(old('grade')))checked @endif><span>是&nbsp;</span>
                        <input type="radio" name="grade" value="0" @if(old('grade')===0)checked @endif><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">排序</label>
                    <div class="col-md-1">
                        <input type="text" class="form-control" name="sort_order" value="{{ old('sort_order', 50)}}" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">导航显示</label>
                    <div class="col-md-11 fix-input">
                        <input type="radio" name="show_in_nav" value="1" @if(old('show_in_nav')===1 or is_null(old('show_in_nav')))checked @endif><span>是&nbsp;</span>
                        <input type="radio" name="show_in_nav" value="0" @if(old('show_in_nav')===0)checked @endif ><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">前台显示</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_show" value="1" @if(old('is_show')===1 or is_null(old('is_show')))checked @endif><span>是&nbsp;</span>
                        <input type="radio" name="is_show" value="0" @if(old('os_show')===0)checked @endif><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">筛选属性</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="filter_attr" value="{{ old('filter_attr') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">&nbsp;</label>
                    <div class="col-md-4">
                        <input type="checkbox" name="continue" value="1" checked>继续添加分类信息
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary fix-submit">提&nbsp;交</button>&nbsp;

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