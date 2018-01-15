@extends(AdminTemplate::getViewPath('_layout.base'))

@section('content')
	<style>
		/* preloader*/
		#p_prldr{
			position: fixed;
			left: 0;
			top: 0;
			right:0;
			bottom:0;
			background: #00acd6;
			z-index: 30;}

		.contpre small{font-size:25px;}

		.contpre{
			width: 250px;
			height: 100px;
			position: absolute;
			left: 50%;top: 48%;
			margin-left:-125px;
			margin-top:-75px;
			color:#fff;
			font-size:40px;
			letter-spacing:-2px;
			text-align:center;
			line-height:35px;}

		#p_prldr .svg_anm {
			position: absolute;
			width: 41px;
			height: 41px;
			background: url(../images/spinning-circles.svg) center center no-repeat;
			background-size:41px;
			margin: -16px 0 0 -16px;}
	</style>
	<div id="p_prldr">
        <div class="contpre">
            <span class="svg_anm"></span><br>
            Please wait<br>
            <small>Site Loading</small>
        </div>
    </div>
	<script type="text/javascript">
		$(window).on('load', function () {
			var $preloader = $('#p_prldr'),
					$svg_anm   = $preloader.find('.svg_anm');
			$preloader.delay(100).fadeOut('slow');
		});
	</script>
	<div class="wrapper">
		<header class="main-header">
			@include(AdminTemplate::getViewPath('_partials.header'))
		</header>

		<div class="content-wrapper" style="margin-left: 0px !important;">


			<!--{!! AdminTemplate::renderBreadcrumbs($breadcrumbKey) !!}-->

			<!--<div class="content-header">
				<h1>
					{{{ $title }}}
				</h1>
			</div>-->

			<div class="content body">
				@yield('content.top')

				{!! $content !!}

				@yield('content.bottom')
			</div>
		</div>
	</div>
@stop
