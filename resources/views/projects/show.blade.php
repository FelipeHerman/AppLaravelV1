@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')

	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1>{{ $project->title }}</h1>
		
			<p class="text-secondary">
				{{ $project->description }}
			</p>

			<p class="text-black-50">
				{{ $project->created_at->diffForHumans() }}
			</p>

			<div class="d-flex justify-content-between aling-items-center">
				<a href="{{ route('projects.index') }}">
					Regresar
				</a>

				@auth
					<div class="btn-group btn-group-sm">
						<a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">
							Editar proyecto
						</a>

						<a href="#" class="btn btn-danger" 
							onclick="document.getElementById('delete-project').submit()">
							Eliminar
						</a>
					</div>

					<form class="d-none" 
						id="delete-project" 
						method="POST" 
						action="{{ route('projects.destroy', $project) }}">

						@csrf @method('DELETE')
					</form>
				@endauth
			</div>
		</div>
	</div>

@endsection