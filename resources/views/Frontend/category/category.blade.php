@extends("Frontend.layouts.layouts")
@section("contents")
<a href="http://www.yumcircle.local/user/feed" >aaaaas</a>
@foreach($category as $item)
    ids： {{$item->id}}<br/>
    name: {{$item->name}}<br/>
    pid: {{$item->pid}}<br/>
    <br/>
@endforeach
@stop

@section("footer")
    @parent

@overwrite