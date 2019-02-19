<?php
include_once "funcoes.php";
include_once "configuracao.php";
   

	if ($_POST){
		 $nome = $_POST['nome']; 
   		 $cpf = $_POST['cpf'];
   		 $dataAd = $_POST['data'];

   		 $dataAd = explode('/',$dataAd);
   		 $dataAd = array_reverse($dataAd);
   		 $dataAd = implode('-',$dataAd);
   		 
   		 $cargo = $_POST['cargo'];
   		 $area = $_POST['area'];
   		 $salario = $_POST['salario'];
 	   cadastrarFunc($nome,$cpf,$dataAd, $cargo, $area, $salario);
 	   header("location: listafunc.php");
	}
     
?>

<!DOCTYPE html>
<html>
<head>
	<title>Novo Funcionario</title>

<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
   if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
</script>

	<link rel="stylesheet" href="mdl/material.min.css">
	<script src="mdl/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<link href="css/style.css" rel="stylesheet">

</head>
<body background="images/fundo_linhas.jpg">
<h2 align="center">Cadastrar Novo Funcionario</h2>
<div class="container">
	<form method ="post" action="novo.php">
		<div class="form-group">
			<label>Nome Funcionario</label>
			<input type="text" name="nome" class="form-control" required="true" value="" placeholder="Digite o nome do funcionario" />
		</div>

		<div class="form-group">
			<label>CPF</label>
			<input type="text" name="cpf" maxlength="14" class="form-control" OnKeyPress="formatar('###.###.###-##', this)" placeholder="Digite o cpf" />
		</div>

		<div class="form-group">
			<label>Data Admissao</label>
			<input type="date" name="data" class="form-control" placeholder="Digite a data de Admissao"maxlength="10" OnKeyPress="formatar('##/##/####', this)" />			
		</div>

		<div class="form-group">
			<label>Cargo</label>
			<input type="text" name="cargo" class="form-control" required="true" value="" placeholder="Digite o cargo" />			
		</div>

		<div class="form-group">
			<label>Area </label>
			<input type="text" name="area" class="form-control" required="true" value="" placeholder="Digite a Area" />	
				
		</div>

		<div class="form-group">
			<label>Salario</label>
			<input type="text" name="salario" class="form-control" required="true" value="" placeholder="Digite o salario" />			
		</div>

		
		<div class="form-group">
			<button type="submit" class="btn btn-success">Enviar</button>	
			
		</div>
	</form> 
	
</div>
<a href="listafunc.php"><button type="submit" class="btn btn-primary">Voltar</button></a>
</body>
</html>