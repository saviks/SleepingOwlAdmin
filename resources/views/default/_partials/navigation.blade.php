
<section class="sidebar">

	@yield('sidebar.top')

	<ul class="sidebar-menu">
		@yield('sidebar.ul.top')

		{!! app('sleeping_owl.navigation')->render() !!}
		<li>
			<a href="{{ url('/logout') }}"
			   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
				<i class="fa fa-sign-out"></i>
				<span>Logout</span>
			</a>

			<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
		@yield('sidebar.ul.bottom')
	</ul>

	@yield('sidebar.bottom')
</section>
