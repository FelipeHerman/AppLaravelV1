@extends('layout')

@section('title', 'About')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="/img/about.svg" alt="Quién soy">
			</div>

			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">@lang('About')</h1>
				<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsam ea architecto rerum, adipisci officiis explicabo similique, sequi odit temporibus eveniet nisi et beatae blanditiis unde! Rem similique vel aperiam!</p>

				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
			</div>
		</div>
	</div>
@endsection