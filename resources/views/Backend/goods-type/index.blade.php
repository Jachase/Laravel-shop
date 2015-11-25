@extends("Backend.layouts.master")
@section("content")
    <div class="place bg-info">
        <span>位置</span>
        <ul>
            <li><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;">商品管理</a></li>
            <li>商品分类</li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <a class="btn btn-primary" href="{{ url('') }}" role="button">添 加</a>
        </div>
        <div class="row search">
            <form class="form-inline">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;
                    <input type="text" class="form-control input-sm" name="name" placeholder="ID or name">
                    <button type="submit" class="btn btn-primary btn-sm">&nbsp;搜&nbsp;索&nbsp; </button>
            </form>
        </div>
        <form>
            <table class="table table-striped table-hover content-main goods-list">
                <tr>
                    <th>
                        <input type="checkbox">
                    </th>
                    <th>编号</th>
                    <th>分类名称</th>
                    <th>父级id</th>
                    <th>导航显示</th>
                    <th>前台显示</th>
                    <th>分级</th>
                    <th>推荐排序</th>
                    <th>操作</th>
                </tr>
                @for($i=1;$i<11;$i++)
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>
                        {{ $i }}
                    </td>
                    <td>手机配件</td>
                    <td>手机类id</td>
                    <td>
                        <span class="glyphicon glyphicon-ok text-success"></span>
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                    </td>
                    <td>5</td>
                    <td>100</td>
                    <td>
                        <a href=""><span class="glyphicon glyphicon-search"></span></a>  |
                        <a href=""><span class="glyphicon glyphicon-edit"></span></a> |
                        <a href=""><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
                @endfor

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