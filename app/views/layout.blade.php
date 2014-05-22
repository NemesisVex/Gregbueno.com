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
		<link rel="icon" href="/images/gbueno.ico" type="image/vnd.microsoft.icon" />
		<link rel="shortcut icon" href="/images/gbueno.ico" type="image/x-icon" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="/css/typography.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/css/layout.css" type="text/css" media="screen, projection" />
		<script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{ VIGILANTMEDIA_CDN_BASE_URI }}/web/js/jquery.swfobject.js"></script>
		<script type="text/javascript" src="{{ VIGILANTMEDIA_CDN_BASE_URI }}/web/js/jquery.swfobject.ext.js"></script>
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
						<img width="100" height="100" title="[Greg Bueno]" alt="[Greg Bueno]" src="/images/bio_wrp_vol_03_restraint.jpg" />
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
			
			<footer class="centered">
				<p>&copy; {{{ $copyright_year }}} Greg Bueno</p>
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
