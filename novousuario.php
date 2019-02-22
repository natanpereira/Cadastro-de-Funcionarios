<?php
header('Content-type: text/html; charset=utf-8');
include_once "funcoes.php";
include_once "configuracao.php";
   
	if ($_POST){
		 $login = $_POST['nomeus']; 
   		 $senha = $_POST['senhaus'];
 	   cadastrarUser($login,$senha);
	}  
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<title>Novo Usuário</title>

	<script src="mdl/material.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

</head>
<body background="images/fundo_linhas.jpg">
<h2 align="center">Novo Usuário</h2>
	<div class="container">
		<form method ="post" action="novousuario.php">
			<div class="form-group">
				<label>Login</label>
				<input type="text" name="nomeus" maxlength="20" class="form-control" required="true" value="" placeholder="Digite um login" />
			</div>

			<div class="form-group">
				<label>Senha</label>
				<input type="password" name="senhaus" class="form-control" required="true" value="" placeholder="Digite uma senha" />
			</div>

			<div class="form-group" >
				<button type="submit" class="btn btn-success" style="float:right; ">Cadastrar</button>
			</div>
		</form> 
			<a href="index.php"><button type="submit" class="btn btn-primary">Voltar</button></a>
	</div>
</body>
</html>