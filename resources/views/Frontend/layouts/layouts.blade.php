<!DOCTYPE html>
<html lang="zh-CN">
<head>
    @section("head")
        @include("Frontend.layouts._partial.header")
    @show
</head>
<body id="main-container" role="main">
    <header id="header">
        <div class="container" role="navigation" class="header-scroll">
            <div class="pull-right">
                <button class="btn btn-primary" autocomplete="off" type="button">LogIn</button>
                <button class="btn btn-primary" autocomplete="off" type="button">LogOut</button>
            </div>
        </div>
    </header>
    @yield("contents")

    @section("footer")
        @include("Frontend.layouts._partial.footer")
    @show

    @yield("model")

</body>
</html>