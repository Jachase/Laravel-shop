<title>{{ $pageTitle or "myWeb" }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="author" content="{{ $author or "author" }}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="robots" content="index, follow">
<meta name="description" content="{{ $description or "description"}}">
<meta name="keywords" content="{{ $keywords or "keywords" }}">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset("/favicon.png") }}">
<link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="{{ asset("/css/common.css") }}">
<script src="{{ asset("/js/jquery.min.js") }}"></script>
<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
