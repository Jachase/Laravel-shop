@extends("Backend.layouts.layouts")
@section("content")
<div id="container-left" style="background:#f0f9fd;">
    <div class="lefttop"></div>

    <dl class="leftmenu">

        <dd>
            <div class="title">
                <span><img src="{{ asset("backend/images/leftico01.png") }}"/></span>商品管理
            </div>
            <ul class="menuson">
                <li class="active"><cite></cite><a href="{{ url('goods') }}" target="rightFrame">商品列表</a><i></i></li>
                <li><cite></cite><a href="{{ url('goods/create') }}" target="rightFrame">添加新商品</a><i></i></li>
                <li><cite></cite><a href="{{ url('category') }}" target="rightFrame">商品分类</a><i></i></li>
                <li><cite></cite><a href="{{ url('brand') }}" target="rightFrame">商品品牌</a><i></i></li>
                <li><cite></cite><a href="{{ url('goodstype') }}" target="rightFrame">商品类型</a><i></i></li>
                <li><cite></cite><a href="javascript:;" target="rightFrame">生成商品代码</a><i></i></li>
                <li><cite></cite><a href="javascript:;" target="rightFrame">标签管理</a><i></i></li>
                <li><cite></cite><a href="javascript:;" target="rightFrame">虚拟商品列表</a><i></i></li>
                <li><cite></cite><a href="javascript:;" target="rightFrame">添加虚拟商品</a><i></i></li>
                <li><cite></cite><a href="javascript:;" target="rightFrame">用户评论</a><i></i></li>
            </ul>
        </dd>


        <dd>
            <div class="title">
                <span><img src="{{ asset("backend/images/leftico02.png") }}"/></span>订单管理
            </div>
            <ul class="menuson">
                <li><cite></cite><a href="javascript:;">订单列表</a><i></i></li>
                <li><cite></cite><a href="javascript:;">订单查询</a><i></i></li>
                <li><cite></cite><a href="javascript:;">合并订单</a><i></i></li>
                <li><cite></cite><a href="javascript:;">订单打印</a><i></i></li>
                <li><cite></cite><a href="javascript:;">缺货登记</a><i></i></li>
                <li><cite></cite><a href="javascript:;">添加订单</a><i></i></li>
                <li><cite></cite><a href="javascript:;">发货单列表</a><i></i></li>
                <li><cite></cite><a href="javascript:;">退货单列表</a><i></i></li>
            </ul>
        </dd>


        <dd>
            <div class="title"><span><img src="{{ asset("backend/images/leftico03.png") }}"/></span>文章管理</div>
            <ul class="menuson">
                <li><cite></cite><a href="javascript:;">文章分类</a><i></i></li>
                <li><cite></cite><a href="javascript:;">文章列表</a><i></i></li>
                <li><cite></cite><a href="javascript:;">文章发布</a><i></i></li>
                <li><cite></cite><a href="javascript:;">在线调查</a><i></i></li>
            </ul>
        </dd>


        <dd>
            <div class="title"><span><img src="{{ asset("backend/images/leftico04.png") }}"/></span>日期管理</div>
            <ul class="menuson">
                <li><cite></cite><a href="javascript:;">自定义</a><i></i></li>
                <li><cite></cite><a href="javascript:;">常用资料</a><i></i></li>
                <li><cite></cite><a href="javascript:;">信息列表</a><i></i></li>
                <li><cite></cite><a href="javascript:;">其他</a><i></i></li>
            </ul>

        </dd>

    </dl>

</div>
@overwrite
@section("footer")
    @parent
    <script type="text/javascript">
        $(function(){
            //导航切换
            $(".menuson li").click(function(){
                $(".menuson li.active").removeClass("active")
                $(this).addClass("active");
            });

            $('.title').click(function(){
                var $ul = $(this).next('ul');
                $('dd').find('ul').slideUp();
                if($ul.is(':visible')){
                    $(this).next('ul').slideUp();
                }else{
                    $(this).next('ul').slideDown();
                }
            });
        })
    </script>
@overwrite