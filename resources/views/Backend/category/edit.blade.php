@extends("Backend.layouts.master")
@section("link")
    @parent
    <link rel="stylesheet" href="{{ asset('css/datetimepicker.css') }}">
    @overwrite
@section("content")
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" ><a href="{{ route('category.create') }}">添加分类</a></li>
            <li role="presentation" class="active"><a href="javascript:;">修改分类</a></li>
        </ul>
        <p></p>
        <div class="row">
            @if(!empty($errors))
            {{ $errors->first()}}
            @endif
            <form class="form-horizontal" action="{{ url("category", $info['id']) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="control-label col-md-1">父级分类</label>
                    <div class="col-md-5 fix-input">
                        <select name="parent_id">
                            <option value="0">顶级分类</option>
                            @foreach($category as $item)
                                <option value="{{ $item['id'] }}" @if($info['parent_id'] === $item['id']) selected @endif>
                                    {{ $item['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">分类名称</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="cat_name" value="{{ $info['cat_name'] }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">关键字</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="keywords" value="{{ $info['keywords'] }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">计量单位</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="measure_unit" value="{{ $info['measure_unit'] }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">简介</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="cat_desc" rows="6">{{ $info['cat_desc'] }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">模板文件</label>
                    <div class="col-md-4">
                        <input class="form-control" type="text" name="template_file" value="{{ $info['template_file'] }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">分级</label>
                    <div class="col-md-1">
                        <input type="radio" name="grade" value="1" @if($info['grade']===1)checked @endif><span>是&nbsp;</span>
                        <input type="radio" name="grade" value="0" @if($info['grade']===0)checked @endif><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">排序</label>
                    <div class="col-md-1">
                        <input type="text" class="form-control" name="sort_order" value="{{ $info['sort_order'] }}" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">导航显示</label>
                    <div class="col-md-11 fix-input">
                        <input type="radio" name="show_in_nav" value="1" @if($info['show_in_nav']===1)checked @endif><span>是&nbsp;</span>
                        <input type="radio" name="show_in_nav" value="0" @if($info['show_in_nav']===0)checked @endif ><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">前台显示</label>
                    <div class="col-md-7 fix-input">
                        <input type="radio" name="is_show" value="1" @if($info['is_show']===1)checked @endif><span>是&nbsp;</span>
                        <input type="radio" name="is_show" value="0" @if($info['is_show']===0)checked @endif><span>否 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">筛选属性</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="filter_attr" value="{{ $info['filter_attr'] }}">
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