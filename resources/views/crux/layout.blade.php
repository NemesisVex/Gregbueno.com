<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Starting to Remember: A Supernatural Detective Novel by Greg Bueno</title>
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
		<!--[if lt IE 8]><link rel="stylesheet" href="{{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}}/web/css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
		<link rel="stylesheet" href="/assets/css/crux/style.css" type="text/css" media="screen, projection" />
		<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body class="crux">

		<div id="container" class="container">

			<div id="masthead" class="centered row">
				<header id="logo" class="col-md-12">
					<hgroup>
						<h1 id="title"><a href="/index.php/crux/"><img src="/assets/images/starting_to_remember_logo.png" alt="[Starting to Remember]" title="[Starting to Remember]" id="logo" /></a></h1>
						<h2 id="subtitle">A supernatural detective novel</h2>
					</hgroup>
				</header>
			</div>

			<div id="content" class="row">
					@if (!empty($section_head))
					<header id="content-header">
					@endif
						@if (!empty($section_label))
						<hgroup>
						@endif
							@if (!empty($section_head))
							<h2 class="section-head">{$section_head}</h2>
							@endif
							@if (!empty($section_label))
							<h3 class="section-label">{$section_label}</h3>
							@endif
						@if (!empty($section_label))
						</hgroup>
						@endif
					@if (!empty($section_head))
					</header>
					@endif

				<!--CONTENT START-->
				@yield('content')
				<!--CONTENT END-->

			</div>
			
			<footer class="centered">
				<p>&copy; {{{ $copyright_year }}} Greg Bueno</p>
			</footer>
			
		</div>

		<img src="/assets/images/starting_to_remember_skyline.jpg" class="bg" />

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
