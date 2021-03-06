<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Greg Bueno
			@if (!empty($page_title))
			: {{{ $page_title }}}
			@endif
		</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="apple-touch-icon" sizes="57x57" href="/assets/graphics/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/assets/graphics/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/assets/graphics/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/assets/graphics/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/assets/graphics/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/assets/graphics/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/assets/graphics/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/assets/graphics/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/graphics/favicon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/assets/graphics/favicon/manifest.json">
		<link rel="mask-icon" href="/assets/graphics/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/assets/graphics/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/assets/graphics/favicon/mstile-144x144.png">
		<meta name="msapplication-config" content="/assets/graphics/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen, projection" />
		<script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}/web/js/jquery.swfobject.js"></script>
		<script type="text/javascript" src="{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}/web/js/jquery.swfobject.ext.js"></script>
	</head>
	<body>

		<div id="container" class="container">
			<div class="row">
				<div id="masthead" class="col-md-12">
					<header id="logo" class="col-md-offset-1 col-md-8">
						<hgroup>
							<h1 id="title"><a href="/">Greg Bueno</a></h1>
						</hgroup>
					</header>

					<section id="logo-pic" class="col-md-3">
						<img width="100" height="100" title="[Greg Bueno]" alt="[Greg Bueno]" src="/assets/images/bio_wrp_vol_03_restraint.jpg" />
					</section>
				</div>
			</div>

			<div id="content" class="row">
					@if (!empty($section_head))
					<header id="content-header" class="col-md-12">
					@endif
						@if (!empty($section_label))
						<hgroup>
						@endif
							@if (!empty($section_head))
							<h2 class="section-head">{{ $section_head }}</h2>
							@endif
							@if (!empty($section_label))
							<h3 class="section-label">{{ $section_label }}</h3>
							@endif
						@if (!empty($section_label))
						</hgroup>
						@endif
					@if (!empty($section_head))
					</header>
					@endif

				@yield('content')
			</div>
			
			<footer class="row">
				<div class="centered col-md-12">
					<p>&copy; {{{ $copyright_year }}} Greg Bueno</p>
				</div>
			</footer>

		</div>


		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-7828220-5");
			pageTracker._trackPageview();
		} catch(err) {}
		</script>

	</body>
</html>
