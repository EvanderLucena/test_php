@extends('template/template')
@section('conteudo')
<div class="p-3 mb-2 bg-info text-white">
    <div class="container p-3 mb-2 bg-light text-dark">

        <!--Table-->
        <table class="table">
      
          <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th class="th-lg">Lorem ipsum dolor</th>
              <th class="th-lg">Lorem ipsum dolor</th>
              <th class="th-lg">Lorem ipsum dolor</th>
            </tr>
          </thead>
          <!--Table head-->
      
          <!--Table body-->
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Lorem ipsum dolor</td>
              <td>Lorem ipsum dolor</td>
              <td>Lorem ipsum dolor</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Lorem ipsum dolor</td>
              <td>Lorem ipsum dolor</td>
              <td>Lorem ipsum dolor</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Lorem ipsum dolor</td>
              <td>Lorem ipsum dolor</td>
              <td>Lorem ipsum dolor</td>
            </tr>
          </tbody>
          <!--Table body-->
      
        </table>
        <!--Table-->
      
      </div>
</div>
@stop