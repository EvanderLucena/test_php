@extends('template/template')

@section('conteudo')

<div class="p-3 mb-2 bg-info text-white">
<form action= "{{ route('categorias.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="container p-3 mb-2 bg-light text-dark">
				<h1 class="text-center">Cadastro de Categorias</h1>

				<strong><label for="nome">Nome</label></strong><br/>
			
				<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Categoria" value="{{ old('nome')}}"><br/>
				@if ($errors->any)
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error}}</li>
						@endforeach
					</ul>			
				@endif
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="{{ route('categorias.index')}}" class="btn btn-danger">Cancelar</a>
			</div>
		</form>
	</div>


@stop