@extends("Frontend.layouts.layouts")
@section("contents")
<div class="container">
    <div class="row">
        <div class="contont-wrap clearfix">
            <div class="col-sm-12 col-md-9 main-content">
                <div class="art-mod article-detail">
                    <div class="mod-head">
                        <h1>{{ $article->title }}</h1>
                    </div>
                    <div class="mod-body">
                        <div class="content">
                            {{ $article->content }}
                        </div>
                    </div>
                    <div class="mod-footer">
                        <div class="meta">
                            <span>
                                <i class="glyphicon glyphicon-time"></i>
                                &nbsp;1 hour ago
                            </span>
                            <a class="add-comment">
                                <i class="glyphicon glyphicon-comment"></i>
                                &nbsp;comment
                            </a>
                            <div class="pull-right dropdown more-operate">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-share"></i>share
                                </a>
                                <div class="art-dropdown dropdown-menu shareout pull-right" role="menu" aria-labelledby="dropdownMenu">
                                    <ul class="art-dropdown-list">
                                        <li>
                                            <a href="javascript:void(0);">
                                                新浪微博
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                微信
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                FaceBook
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                sidebar
            </div>
        </div>

    </div>

</div>
@stop

@section("footer")
    @parent

@overwrite