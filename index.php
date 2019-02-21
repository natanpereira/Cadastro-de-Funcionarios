<?php
header('Content-type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
		<head>
			<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
			<title>Página Inicial</title>
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
		<header>
			<div>
				<div>
				<h1 align="center" class="font-weight-bold">Funcionários Duosystem</h1>
				</div>
			<div style="text-align: center;"> 
				<div class="btn-group" role="group" aria-label="Basic example">
					<a href="listafunc.php"><button type="button" class="btn btn-primary" >Listar Funcionários</button></a>
					<a href="novo.php"><button type="button" class="btn btn-primary">Novo Funcionário</button></a>	
				</div>		
			</div>
			</div>
		</header>
	</body>
</html>
