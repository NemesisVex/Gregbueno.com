@extends('layout')

@section('content')
<section class="full-column col-md-12">
	
	<p>I've launched a lot of blogs over the years, and most of them have died from neglect. This page is a museum for those sites.</p>
	
	<h3>Personal Blogs</h3>
	
	<ul>
		<li><a href="/wp/sakufu/">作譜</a></li>
		<li><a href="/wp/meisakuki/">名作記</a></li>
		<li><a href="/wp/vexvox/">VexVox</a></li>
	</ul>
	
	<h3>Musicwhore.org Blogs</h3>
	
	<ul>
		<li><a href="{{ $config_url_base['to_archive'] }}">Archive.Musicwhore.org</a></li>
		<li><a href="{{ $config_url_base['to_filmwhore'] }}">Filmwhore.org</a></li>
		<li><a href="{{ $config_url_base['to_tvwhore'] }}/">TVwhore.org</a></li>
	</ul>
	
	<h3>Archived projects</h3>
	
	<ul>
		<li><a href="{{ $config_url_base['to_austinstories'] }}">Austin Stories</a></li>
		<li><a href="{{ $config_url_base['to_ddn'] }}">Duran Duran Networks</a></li>
	</ul>
</section>
@stop