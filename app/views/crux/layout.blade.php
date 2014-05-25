<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Starting to Remember: A Supernatural Detective Novel by Greg Bueno</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="/images/gbueno.ico" type="image/vnd.microsoft.icon" />
		<link rel="shortcut icon" href="/images/gbueno.ico" type="image/x-icon" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />
		<!--[if lt IE 8]><link rel="stylesheet" href="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
		<link rel="stylesheet" href="/css/crux/typography.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/css/crux/layout.css" type="text/css" media="screen, projection" />
		<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body class="crux">

		<div id="container" class="container">

			<div id="masthead" class="centered row">
				<header id="logo" class="col-md-12">
					<hgroup>
						<h1 id="title"><a href="/index.php/crux/"><img src="/images/starting_to_remember_logo.png" alt="[Starting to Remember]" title="[Starting to Remember]" id="logo" /></a></h1>
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

		<img src="/images/starting_to_remember_skyline.jpg" class="bg" />

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
