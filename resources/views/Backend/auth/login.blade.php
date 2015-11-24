@extends("Backend.layouts.layouts")
@section("content")
    <div id="mainBody">
        <div id="cloud1" class="cloud"></div>
        <div id="cloud2" class="cloud"></div>
    </div>


    <div class="logintop">
        <span>欢迎登录后台管理界面平台</span>
        <ul>
            <li><a href="#">回首页</a></li>
            <li><a href="#">帮助</a></li>
            <li><a href="#">关于</a></li>
        </ul>
    </div>

    <div class="loginbody">

        <span class="systemlogo"></span>

        <div class="loginbox">
            <form action="{{ url('auth/login') }}" method="post">
                {{ csrf_field() }}
            <ul>
                <li>
                    <input name="name" type="text" class="loginuser" onclick="JavaScript:this.value=''">
                </li>
                <li>
                    <input name="password" type="password" class="loginpwd" onclick="JavaScript:this.value=''">
                </li>
                <li>
                    <input name="submit" type="submit" class="loginbtn" value="登录">
                    <label><input name="remember" type="checkbox">记住密码</label>
                    <label><a href="{{ url('auth/password/email') }}">忘记密码？</a></label>
                </li>
            </ul>
            </form>

        </div>

    </div>

    <div class="loginbm">版权所有 © {{ \Carbon\Carbon::now()->year }} @jachase </div>
@endsection

@section("footer")
    @parent
    <script src="{{ asset('backend/js/cloud.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(function () {
            $('.loginbox').css({'position': 'absolute', 'left': ($(window).width() - 692) / 2});
            $(window).resize(function () {
                $('.loginbox').css({'position': 'absolute', 'left': ($(window).width() - 692) / 2});
            })
            $('body').css('background', '#1c77ac url({{ asset('backend/images/light.png') }}) no-repeat center top')
            $('body').css('overflow', 'hidden');
            $('.systemlogo').css('background', 'none');
        });
    </script>
@overwrite