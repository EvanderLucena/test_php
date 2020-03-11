@extends('template/template')
@section('conteudo')
<div class="p-3 mb-2 bg-info text-white">
    <div class="container p-3 mb-2 bg-light text-dark">

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
              <td style="text-align:center"><a href="#" class="btn btn-sm btn-primary col-sm-2">Editar</a> <a href="#" class="btn btn-sm btn-danger col-sm-2">Remover</a></td>

              </tr>
              @endforeach
          </tbody>
          <tfoot>
            <tr style="text-align:center">
              <td><a href="#" class="btn btn-sm btn-success col-sm-5">Salvar</a></td>
              <td><a href="#" class="btn btn-sm btn-primary col-sm-5">Voltar</a></td>
            </tr> 
              {!! $categorias->links()!!}  
          </tfoot>
          <!--Table body-->
      
        </table>
      
        <!--Table-->
      
      </div>
</div>
@stop