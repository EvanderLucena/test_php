@extends('template/template')
@section('conteudo')
<div class="p-3 mb-2 bg-info text-white">
    <div class="container p-3 mb-2 bg-light text-dark">
      <h1 class="text-center">Produtos</h1>
        <!--Table-->
        <table class=" table table-hover table-sm table-bordered">
        
          <!--Table head-->
          <thead>
            <tr >
              <th class="th-lg">ID</th>
              <th class="th-lg">Nome</th>
              <th class="th-lg">Descrição</th>
              <th class="th-lg">Preço</th>
              <th class="th-lg">Categoria</th>
              <th style="text-align:center" class="th-lg">Ações</th>
            </tr>
          </thead>
          <!--Table head-->
      
          <!--Table body-->
          <tbody>
              @foreach ($produtos as $produto)
              <tr>
              <td>{{ $produto->id}}</td>
              <td>{{ $produto->nome}}</td>
              <td>{{ $produto->descricao}}</td>
              <td>{{ $produto->preco}}</td>
              <td>{{ $produto->categoria->nome}}</td>
              <td style="text-align:center" >
                <div class="btn-group btn-sm">
                    <form action="{{ route('produtos.edit', $produto->id) }}" method="post">
                      @csrf
                      @method('GET')
                     <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                    </form>
                </div>

                <div class="btn-group btn-sm">
                    <form action="{{ route('categorias.destroy', $produto->id) }}" method="post">
                      @csrf
                      @method('DELETE')       
                      <button type="submit" class="btn btn-danger btn-sm" >Remover</button>
                    </form>
                </div>    
              </td>

              </tr>
              @endforeach
          </tbody>
          <tfoot>
            <tr style="text-align:center">
            <td><a href="{{ route('produtos.create')}}" class="btn btn-sm btn-success col-sm-10">Inserir</a></td>
              <td><a href="{{ route('inicial')}}" class="btn btn-sm btn-primary col-sm-10">Voltar</a></td>
            </tr> 
              {!! $produtos->links()!!}  
          </tfoot>
          <!--Table body-->
      
        </table>
      
        <!--Table-->
      
      </div>
</div>
@stop