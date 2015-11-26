@extends("Backend.layouts.master")
@section("content")
    <div class="container">
        <div class="row search">
            <form class="form-inline">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;
                    <select class="form-control input-sm">
                        <option>所有分类</option>
                        <option>手机类型</option>
                        <option>手机配件</option>
                        <option>充值卡</option>
                    </select>&nbsp;
                    <select class="form-control input-sm">
                        <option>所有品牌</option>
                        <option>诺基亚</option>
                        <option>联想</option>
                        <option>IPhone</option>
                        <option>三星</option>
                        <option>小米</option>
                    </select>&nbsp;
                    <select class="form-control input-sm">
                        <option>全部</option>
                        <option>精品</option>
                        <option>新品</option>
                        <option>热销</option>
                    </select>&nbsp;
                    <select class="form-control input-sm">
                        <option>全部</option>
                        <option>上架</option>
                        <option>下架</option>
                    </select>&nbsp;
                    <label class="control-label">关键字</label>
                    <input type="text" class="form-control input-sm" name="">
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
                    <th>商品名称</th>
                    <th>货号</th>
                    <th>价格</th>
                    <th>上架</th>
                    <th>精品</th>
                    <th>新品</th>
                    <th>热销</th>
                    <th>推荐排序</th>
                    <th>库存</th>
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
                    <td>诺基亚N85</td>
                    <td>ECS000032</td>
                    <td>3010.00</td>
                    <td>
                        <span class="glyphicon glyphicon-ok text-success"></span>
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                    </td>
                    <td>
                        <span class="glyphicon glyphicon-ok text-success"></span>
                    </td>
                    <td>100</td>
                    <td>5</td>
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