@extends("Backend.layouts.layouts")
@section("content")
    <div class="topleft">
        <a href="{{ url('/') }}" target="_parent"><img src="{{ asset('backend/images/logo.png') }}" title="系统首页"/></a>
    </div>

    <ul class="nav">
        <li><a href="{{ url('dash/statistics') }}" target="rightFrame" class="selected"><img src="{{ asset('backend/images/icon01.png') }}" title="工作台"/>

                <h2>工作台</h2></a></li>
        <li><a href="imgtable.html" target="rightFrame"><img src="{{ asset('backend/images/icon02.png') }}"
                                                             title="模型管理"/>

                <h2>模型管理</h2></a></li>
        <li><a href="imglist.html" target="rightFrame"><img src="{{ asset('backend/images/icon03.png') }}"
                                                            title="模块设计"/>

                <h2>模块设计</h2></a></li>
        <li><a href="tools.html" target="rightFrame"><img src="{{ asset('backend/images/icon04.png') }}" title="常用工具"/>

                <h2>常用工具</h2></a></li>
        <li><a href="computer.html" target="rightFrame"><img src="{{ asset('backend/images/icon05.png') }}"
                                                             title="文件管理"/>

                <h2>文件管理</h2></a></li>
        <li><a href="tab.html" target="rightFrame"><img src="{{ asset('backend/images/icon06.png') }}" title="系统设置"/>

                <h2>系统设置</h2></a></li>
    </ul>

    <div class="topright">
        <ul>
            {{--<li>--}}
                {{--<span><img src="{{ asset('backend/images/help.png') }}" title="帮助" class="helpimg"/></span>--}}
                {{--<a href="#">帮助</a>--}}
            {{--</li>--}}
            {{--<li><a href="#">关于</a></li>--}}
            <li><a href="{{ url('auth/logout') }}" target="_parent">退出</a></li>
        </ul>

        <div class="user">
            <span>{{ Auth::admin()->user()->name }}</span>
            <i>消息</i>
            <b>{{  $messageCount or '0' }}</b>
        </div>

    </div>
@overwrite
@section("footer")
    @parent
    <script type="text/javascript">
        $(function(){
            $('#main-container').css('background',"url({{ asset("backend/images/topbg.gif") }}) repeat-x");

            //顶部导航切换
            $(".nav li a").click(function(){
                $(".nav li a.selected").removeClass("selected")
                $(this).addClass("selected");
            })
        });
    </script>
@overwrite