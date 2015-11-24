<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include("Backend.layouts._partial.head")
</head>
<body id="main-container">
@yield("content")

@section("footer")
    @include("Backend.layouts._partial.footer")
    @show
</body>
</html>