@extends('template/template')

@section('conteudo')

<div  class  = "p-3 mb-2 bg-info text-white">
<form action = "{{ route('produtos.update', $produto->id)}}" method = "post" enctype = "multipart/form-data">
            @csrf
            @method('PUT')
			<div class = "container p-3 mb-2 bg-light text-dark">
                <h1  class = "text-center">Cadastro de Produtos</h1>
               
              
				    <strong><label for  = "nome">Nome</label></strong><br/>
				    <input  type = "text" class = "form-control" name = "nome" id = "nome" placeholder = "Nome do Produto" value = "{{$produto->nome}}"><br/>
                    <strong><label for  = "preco">Preço</label></strong><br/>
                    <input type = "text" class = "form-control col-md-3" onkeypress = "$(this).mask('R$ 999.990,00')"name = "preco" id = "preco" placeholder = "R$ 0,00" value = "{{ $produto->preco}}"><br/>
               
                    <strong><label for  = "preco">Categoria</label></strong><br/>
                    <select class = "form-control col-md-3">
                            @foreach($categorias as $categoria)
                               <option>{{$categoria->nome}}</option>
                            @endforeach
                    </select>
                
                    <strong><label for  = "descricao">Descrição</label></strong><br />
                    <textarea name = "descricao" class = "form-control" id = "descricao" placeholder = "Descrição" value = "{{ old('descricao')}}"></textarea><br />
				
				@if ($errors->any)
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error}}</li>
						@endforeach
					</ul>			
				@endif
				    <button type = "submit" class= "btn btn-primary">Salvar</button>
                    <a href = "{{ route('produtos.index')}}" class = "btn btn-danger">Cancelar</a>
               
			</div>
		</form>
	</div>


@stop