@extends("Backend.layouts.layouts")
@section("content")
<frameset rows="88,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="{{ url('dash/top') }}" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset cols="187,*" frameborder="no" border="0" framespacing="0">
    <frame src="{{ url('dash/left') }}" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="{{ url('dash/main') }}" name="rightFrame" id="rightFrame" title="rightFrame" />
  </frameset>
</frameset>
<noframes><body>
</body></noframes>
@show
