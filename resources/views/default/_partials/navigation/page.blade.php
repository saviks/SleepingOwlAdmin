@if( $title != 'NotView')
    <a href="{{ $url }}"><li class="{!! ($isActive)?'active_menu':'' !!}" >{!! $title !!}</li></a>
@endif

