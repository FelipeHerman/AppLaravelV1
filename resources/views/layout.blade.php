<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Aplicación')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
	
	<div id="app" class="d-flex flex-column h-screen justify-content-between">

		<header>
			@include('partials.nav') <!-- Menú de navegación -->	
			@include('partials.session-status') <!-- Mensajes de sesión -->
		</header>
		
		<main class="py-4">
			@yield('content') <!-- Contenido principal -->
		</main>
		
		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
	</div>

</body>
</html>