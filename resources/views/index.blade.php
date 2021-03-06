@extends('layout')

@section('content')
				<section id="music" class="col-md-4 home-column">
					<h3>Music</h3>

					<p>I've been writing songs since high school, and I even got a degree in music.</p>

					<p>These days, most of my musical activity happens in my home studio, which I call the Closet West.</p>

					<ul>
						<li><a href="{{ config('global.url_base.to_eponymous4') }}/">Eponymous 4</a></li>
						<li><a href="{{ config('global.url_base.to_emptyensemble') }}/">Empty Ensemble</a></li>
						<li><a href="{{ config('global.url_base.to_penziasandwilson') }}/">Penzias and Wilson</a></li>
						<li><a href="{{ config('global.url_base.to_observantrecords') }}/">Observant Records</a></li>
						<li><a href="{{ config('global.url_base.to_shinkyokuadvocacy') }}/">Shinkyoku Advocacy</a></li>
					</ul>
				</section>

				<section id="writing" class="col-md-4 home-column">
					<h3>Writing</h3>

					<p>I've been writing online since before it was called blogging. (Back then, it was called &quot;keeping an online journal.&quot;)</p>

					<p>At one point, I had at least  <a href="/museum/">six blogs</a>, almost all of them neglected. These days, I focus my online writing on <a href="{{ config('global.url_base.to_musicwhore') }}/">music</a> and <a href="{{ config('global.url_base.to_wp') }}/">technology</a>.</p>

					<ul>
						<li><a href="{{ config('global.url_base.to_musicwhore') }}/">Musicwhore.org</a></li>
						<li><a href="{{ config('global.url_base.to_wp') }}/">Bit-Wise Dilletante</a></li>
						<li><a href="/museum/">Blog Museum</a></li>
						<li><a href="/crux/">Crux Series</a></li>
					</ul>
				</section>

				<section id="web" class="col-md-4 home-column">
					<h3>Web</h3>

					<p>I make a living as a web software engineer. Details can be found in my <a href="{{ config('global.url_base.to_vigilantmedia') }}/">online portfolio</a>.</p>

					<p>I can also be found hanging around various social media sites.</p>

					<ul>
						<li><a href="{{ config('global.url_base.to_vigilantmedia') }}/">Vigilant Media</a> <small>(online portfolio)</small></li>
						<li><a href="https://bitbucket.org/NemesisVex/">Bitbucket profile</a></li>
						<li><a href="https://bitbucket.org/observantrecords/">Observant Records Bitbucket profile</a></li>
					</ul>

					<ul id="nav-social">
						<li><a href="https://twitter.com/NemesisVex/"><img src="{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}/web/images/icons/twitter.png" alt="[Twitter]" title="[Twitter]" /></a></li>
						<li><a href="https://facebook.com/greg.bueno/"><img src="{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}/web/images/icons/facebook.png" alt="[Facebook]" title="[Facebook]" /></a></li>
						<li><a href="https://last.fm/user/NemesisVex/"><img src="{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}/web/images/icons/lastfm.png" alt="[Last.fm]" title="[Last.fm]" /></a></li>
						<li><a href="https://www.linkedin.com/in/gregbueno/"><img src="{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}/web/images/icons/linkedin.png" alt="[LinkedIn]" title="[LinkedIn]" /></a></li>
						<li><a href="/contact/"><img src="{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}/web/images/icons/email.png" alt="[E-mail]" title="[E-mail]" /></a></li>
						<li><a href="/distractions/">more ...</a></li>
					</ul>

				</section>
@stop