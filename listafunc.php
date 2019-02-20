<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);
include_once "funcoes.php";
include_once "configuracao.php";

$funcionarios = listafunc();

?>

<!DOCTYPE html>
<html>
<head>	
	<title>Funcionarios</title>
	<link rel="stylesheet" href="https://cdn.datatable.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<body background="images/fundo_linhas.jpg">
<h1 align="center">Funcionarios</h1>
<div class="container">
<dl>
<?php if(isset($_GET['msg'])):?>
<div>
	<div class="alert alert-primary" role="alert">
	  <?php echo $_GET['msg']?>
	</div>

</div>
<?php endif?>

<?php if(isset($_GET['msgErro'])):?>
<div>
	<div class="alert alert-danger" role="alert">
	  <?php echo $_GET['msgErro']?>
	</div>
</div>
<?php endif ?>

<a href="index.php" class="btn btn-primary"><b><u>P</u>ágina <u>I</u>nicial</b></a>
<a href="novo.php" class="btn btn-primary"><b><u>N</u>ovo <u>F</u>uncionario</b></a>
</dl>
<table class="table table-striped table-bordered" id="funcionarios">

<caption>Funcionarios Duo <?php echo date('d-m-Y H:i');?></caption>
	<thead>

	<tr bgcolor="#A4A4A4">
		<th>Nome</th>
		<th>Data Admissão</th>
		<th>Cargo</th>
		<th>Area</th>
		<th>Salario</th>
		<th>Ações</th>
	</tr>
	</thead>
	<tbody>
<?php foreach($funcionarios as $valor): ?>
	<tr>
		<td><?php echo $valor['nome_func']?></td>
		<td><?php echo date('d/m/Y', strtotime($valor['data_admissao']))?></td>
		<td><?php echo $valor['cargo']?></td>
		<td><?php echo $valor['area']?></td>
		<td><?php echo "R$".$valor['salario']?></td>
		<td align="center">
			<a href="editar.php?id=<?php echo $valor['id_func']?>"><button class="btn btn-success">EDITAR</button></a>
			<a href="excluir.php?id=<?php echo $valor['id_func']?>"><button class="btn btn-success">EXCLUIR</button></a>
		</td>
	</tr>
 <?php endforeach?>
</tbody>
</table>
</div>

<script type="text/javascript">
$(document).ready( function () {
    $('#funcionarios').DataTable();

} );
</script>
</body>
</html>