@extends('template/template')

@section('conteudo')

<div class="p-3 mb-2 bg-info text-white">
<form method="post" action= "{{ route('categorias.store')}}">
			@csrf
			<div class="container p-3 mb-2 bg-light text-dark">
				<h1 class="text-center">Cadastro de Produtos</h1>

				<strong><label for="nomeFuncionario">Nome</label></strong><br/>
				<input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario" placeholder="Nome"><br/>

				<div class="form-row">
					<div class="form-group col-md-3">
						<strong><label for="dataNascimento">Data de Nascimento</label></strong>
						<input type="date" class="form-control" name="dataNascimento" id="dataNascimento">
					</div>
					<div class="form-group col-md-4">
						<strong><label for="cpf">CPF</label></strong>
						<input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
					</div>
					<div class="form-group col-md-4">
						<strong><label for="rg">RG</label></strong>
						<input type="text" class="form-control" name="rg" id="rg"  placeholder="RG">
					</div>
					<div class="form-group col-md-5">
						<strong><label for="rua">Rua/Av.</label></strong>
						<input type="text" class="form-control" name="rua" id="rua"  placeholder="Rua/Av.">
					</div>
					<div class="form-group col-md-2">
						<strong><label for="numEndereco">Número</label></strong>
						<input type="text" class="form-control" name="numEndereco" id="numEndereco"  placeholder="Número">
					</div>
					<div class="form-group col-md-5">
						<strong><label for="bairro">Bairro</label></strong>
						<input type="text" class="form-control" name="bairro" id="bairro"  placeholder="Bairro">
					</div>
					<div class="form-group col-md-2">
						<strong><label for="dataAdmissao">Data de Admissão</label></strong>
						<input type="date" class="form-control" name="dataAdmissao" id="dataAdmissao" >
					</div>
					<div class="form-group col-md-4">
						<strong><label for="funcao">Função</label></strong>
						<input type="text" class="form-control" name="funcao" id="funcao" placeholder="Função">
					</div>
					<div class="form-group col-md-4">
						<strong><label for="departamento">Departamento</label></strong>
						<input type="text" class="form-control" name="departamento" id="departamento" placeholder="Departamento">
					</div>
					<div class="form-group col-md-4">
						<strong><label for="numCnh">Nº CNH</label></strong>
						<input type="text" class="form-control" name="numCnh" id="numCnh" placeholder="Nº CNH">
					</div>
					<div class="form-group col-md-1">
						<strong><label for="categoria">Categoria</label></strong>
						<select name="categoria" id="categoria" class="form-control">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<strong><label for="situacaoFunc">Situação</label></strong>
						<select name="situacaoFunc" id="situacaoFunc" class="form-control">
							<option value="TRABALHANDO">Trabalhando</option>
							<option value="DESLIGADO DA EMPRESA">Desligado da Empresa</option>
						</select>
					</div>
					<div class="form-group col-md-2">
						<strong><label for="dataDemissao">Data de Demissão</label></strong>
						<input type="date" class="form-control" name="dataDemissao" id="dataDemissaode">
					</div>
				</div>

				<strong><label for="observacoes">Observações</label></strong><br />
				<textarea name="observacoes" class="form-control" id="observacoes" placeholder="Observações"></textarea><br />
				<button type="submit" class="btn btn-primary">Enviar</button>
				<a href="#" class="btn btn-success">Cadastrar Usuário</a>
				<a href="#" class="btn btn-danger">Cancelar</a>
			</div>
		</form>
	</div>


@stop