@extends("Backend.layouts.master")
@section("content")
    <div class="container">
        <div class="row search">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ url('category/create') }}" role="button">添 加</a>
            </div>
            <div class="col-md-8">
                <form class="form-inline">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;
                    <input type="text" class="form-control input-sm" name="name" placeholder="ID or name">
                    <button type="submit" class="btn btn-primary btn-sm">&nbsp;搜&nbsp;索&nbsp; </button>
                </form>
            </div>
        </div>

        <form>
            <table class="table table-striped table-hover content-main">
                <tr>
                    <th>
                        <input type="checkbox">
                    </th>
                    <th>编号</th>
                    <th>分类名称</th>
                    <th>父级id</th>
                    <th>导航显示</th>
                    <th>前台显示</th>
                    <th>分级显示</th>
                    <th>推荐排序</th>
                    <th>操作</th>
                </tr>
                @foreach($category as $key=>$item)
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>
                        {{ $key+1 }}
                    </td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['parent_id'] }}</td>
                    <td>
                        @if($item['show_in_nav'])
                        <span class="glyphicon glyphicon-ok text-success"></span>
                        @else
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                        @endif
                    </td>
                    <td>
                        @if($item['is_show'])
                            <span class="glyphicon glyphicon-ok text-success"></span>
                        @else
                            <span class="glyphicon glyphicon-remove text-danger"></span>
                        @endif
                    </td>
                    <td>
                        @if($item['grade'])
                            <span class="glyphicon glyphicon-ok text-success"></span>
                        @else
                            <span class="glyphicon glyphicon-remove text-danger"></span>
                        @endif
                    </td>
                    <td>{{ $item['sort_order'] }}</td>
                    <td>
                        <a href="{{ url("category/{$item['id']}/edit") }}"><span class="glyphicon glyphicon-search"></span></a>  |
                        <a href="{{ url("category/{$item['id']}/edit") }}"><span class="glyphicon glyphicon-edit"></span></a> |
                        <a href="{{ url('category/delete', $item['id']) }}"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
                @endforeach

            </table>
            <nav class="pull-right">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </form>
    </div>
@overwrite