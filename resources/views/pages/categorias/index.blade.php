@extends('template/template')
@section('conteudo')
<div class="p-3 mb-2 bg-info text-white">
    <div class="container p-3 mb-2 bg-light text-dark">
      <h1 class="text-center">Categorias</h1>
        <!--Table-->
        <table class=" table table-hover table-sm table-bordered">
        
          <!--Table head-->
          <thead>
            <tr >
              <th class="th-lg">ID</th>
              <th class="th-lg">Nome</th>
              <th style="text-align:center" class="th-lg">Ações</th>
            </tr>
          </thead>
          <!--Table head-->
      
          <!--Table body-->
          <tbody>
              @foreach ($categorias as $categoria)
              <tr>
              <td>{{ $categoria->id}}</td>
              <td>{{ $categoria->nome}}</td>
              <td style="text-align:center" >
                <div class="btn-group btn-sm">
                    <form action="{{ route('categorias.edit', $categoria->id) }}" method="post">
                      @csrf
                      @method('GET')
                     <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                    </form>
                </div>

                <div class="btn-group btn-sm">
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
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
            <td><a href="{{ route('categorias.create')}}" class="btn btn-sm btn-success col-sm-5">Inserir</a></td>
              <td><a href="{{ route('inicial')}}" class="btn btn-sm btn-primary col-sm-5">Voltar</a></td>
            </tr> 
              {!! $categorias->links()!!}  
          </tfoot>
          <!--Table body-->
      
        </table>
      
        <!--Table-->
      
      </div>
</div>
@stop