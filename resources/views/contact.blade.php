@extends('layout')

@section('content')
				<section class="full-column col-md-12">
					<p>Yeah, yeah, yeah -- most people just put a <tt>mailto:</tt> link on their pages. Me? I try to avoid the spam robots whenever possible.</p>

					{!! Form::open( array( 'url' => 'email' ) ) !!}

						<p>
							{!! Form::label('i', 'Name:') !!}
							{!! Form::text('i', null, array( 'class' => 'form-hidden' )) !!}
							{!! Form::text('n', null, array( 'size' => '55')) !!}
						</p>

						<p>
							{!! Form::label('s', 'E-mail:') !!}
							{!! Form::email('s', null, array( 'class' => 'form-hidden' )) !!}
							{!! Form::email('a', null, array( 'size' => '55')) !!}
						</p>

						<p>
							{!! Form::label('r', 'Subject:') !!}
							{!! Form::text('r', null, array( 'class' => 'form-hidden' )) !!}
							{!! Form::text('t', null, array( 'size' => '55')) !!}
						</p>

						<p>
							{!! Form::label('m', 'Comments:') !!}
							{!! Form::textarea('m', null, array( 'class' => 'form-hidden' )) !!}
							{!! Form::textarea('b', null, array( 'wrap' => 'soft', 'cols' => '75', 'rows' => '10')) !!}
						</p>

						<p>
							{!! Form::label('submit', '&nbsp;') !!}
							{!! Form::submit('Send', array( 'class' => 'btn btn-primary' ) ) !!}
							{!! Form::reset('Reset', array( 'class' => 'btn btn-default' ) ) !!}
						</p>
						
					{!! Form::close() !!}
				</div>

				<script type="text/javascript" src="{{{ env( 'VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com') }}}/web/js/jquery.validate.pack.js"></script>
				<script type="text/javascript">
				$(function ()
				{
					$('#contact-form').validate(
					{
						rules:
						{
							n: {required: true},
							a: {required: true, email: true},
							b: {required: true}
						},
						messages:
						{
							n: {required: 'Please provide your name'},
							a: {required: 'Please provide your e-mail address'},
							b: {required: "Aren't you going to say something?"}
						}
					});
				});
				</script>
@stop