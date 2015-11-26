@extends("Backend.layouts.master")
@section("content")
    <div class="container">
        <div class="row search">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ url('brand/create') }}" role="button">添 加</a>
            </div>
        </div>
        <form>
            <table class="table table-striped table-hover content-main goods-list fix-table">
                <tr>
                    <th>
                        <input type="checkbox" name="ids">
                    </th>
                    <th>编号</th>
                    <th>logo</th>
                    <th>品牌名称</th>
                    <th>关键字</th>
                    <th>前台显示</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                @for($i=1;$i<9;$i++)
                <tr >
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>
                        {{ $i }}
                    </td>
                    <td><img src="{{ asset('image/profile-photo-01.jpg') }}" class="img-circle thumbnail-sm "></td>
                    <td>苹果</td>
                    <td>iphone,</td>
                    <td><span class="glyphicon glyphicon-ok text-success"></span></td>
                    <td>2015-11-25 19:00:01</td>
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