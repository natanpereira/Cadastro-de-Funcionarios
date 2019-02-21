<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);
include_once "funcoes.php";
include_once "configuracao.php";

if($_GET){
$id_func = $_GET['id'];
}

if ($_POST){
	$mostra = $_POST['id'];
	$nome_edit = $_POST['nome']; 
   	$dataAd = $_POST['data'];
   	$cargo_edit = $_POST['cargo'];
   	$area_edit = $_POST['area'];
	$salario_edit = $_POST['salario'];
   	editarFunc($mostra,$nome_edit, $cargo_edit, $area_edit, $salario_edit);
	header("location: listafunc.php");
}
$mostraFunc = mostraFunc($id_func);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Cadastro Paciente</title>
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
<h1 align="center" >Editar Cadastro Funcionarios</h1>
<div class="container">

<?php foreach($mostraFunc as $valor): ?> 

		<form method ="post" action="editar.php">
		<div class="form-group">
			<label>Id</label>
			<input type="text" name="id" class="form-control" readonly="true" value="<?php echo $valor['id_func'];?>" />
		</div>
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required="true" value="<?php echo $valor['nome_func'];?>"  />
		</div>

		<div class="form-group">
			<label>CPF</label>
			<input type="text" name="cpf" class="form-control" readonly="true" value="<?php echo $valor['cpf_func'];?>"  />
		</div>

		<div class="form-group">
			<label>Data ADMISSAO</label>
			<input type="date" name="data" class="form-control" readonly="true" value="<?php echo date('d/m/Y', strtotime($valor['data_admissao']));?>"  />
		</div>

		<div class="form-group">
			<label>Cargo</label>
			<input type="text" name="cargo" class="form-control" required="true" value="<?php echo $valor['cargo'];?>"  />			
		</div>
		
		<div class="form-group">
			<label>Area</label>
			<input type="text" name="area" class="form-control" required="true" value="<?php echo $valor['area'];?>"  />			
		</div>

		<div class="form-group">
			<label>Salario</label>
			<input type="text" name="salario" class="form-control" required="true" value="<?php echo $valor['salario'];?>"  />			
		</div>	

		<div class="form-group">
			<button type="submit" class="btn btn-success">Alterar</button>	
			
		<?php endforeach?>	
		</div>
	</form> 
</div>
<a href="listafunc.php"><button type="submit" class="btn btn-primary">Voltar</button></a>
</body>
</html>