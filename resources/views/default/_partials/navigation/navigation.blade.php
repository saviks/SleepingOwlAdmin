<div class="nav_menu">
    <ul style="margin-bottom: 0px !important;">
        <a href="/admin"><li class="{!! ((\Request::route()->getUri()=='admin'))?'active_menu':'' !!}">Workbench</li></a>
        @foreach($pages as $page)
            {!! $page->render() !!}
        @endforeach
        <a href="/admin/users"><li class="{!! ((\Request::route()->getUri()=='admin/users'))?'active_menu':'' !!}">Users</li></a>
        <a href="{{ url('/logout') }}"><li>Logout</li></a>
    </ul>
</div>

<div style="clear: both;"></div>
