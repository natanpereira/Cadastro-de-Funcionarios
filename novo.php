<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }
 
$logado = $_SESSION['login'];

header('Content-type: text/html; charset=utf-8');
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
	}  
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<title>Novo Funcionário</title>


	<script src="mdl/material.min.js"></script>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

</head>
<body background="images/fundo_linhas.jpg">
<h2 align="center">Cadastrar Novo Funcionário</h2>
<div class="container">
	<form method ="post" action="novo.php">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required="true" value="" placeholder="Digite o nome do funcionário" />
		</div>

		<div class="form-group">
			<label>CPF</label>
			<input type="text" name="cpf" maxlength="14" class="form-control" OnKeyPress="formatar('###.###.###-##', this); return SomenteNumero(event)" placeholder="Digite o CPF" />
		</div>

		<div class="form-group">
			<label>Data admissão</label>
			<input type="date" name="data" class="form-control" placeholder="Digite a data de admissão"maxlength="10" OnKeyPress="formatar('##/##/####', this)" />			
		</div>

		<div class="form-group">
			<label>Cargo</label>
			<select name="cargo" class="form-control">
				<option select disabled selected="true">Selecione o cargo</option>
				<option>Administrador De Dados</option>
				<option>Analista Financeiro Jr</option>
				<option>Analista De Negócios Pl</option>
				<option>Analista De Rh Sênior</option>
				<option>Analista De Suporte JR</option>
				<option>Analista De Suporte Pl</option>
				<option>Analista De Suporte Sr</option>
				<option>Analista De Suporte</option>
				<option>Analista De Testes Jr</option>
				<option>Analista Financeiro Sr</option>
				<option>Analista Programador Pl</option>
				<option>Analista Programador Sênior</option>
				<option>Analista Programador Sr</option>
				<option>Assistente Administrativo Pl</option>
				<option>Assistente Comercial</option>
				<option>Assistente Financeiro Sr</option>
				<option>Coordenador De Infraestrutura</option>
				<option>Coordenador De Operações</option>
				<option>Coordenador De Projetos</option>
				<option>DBA PI</option>
				<option>Dba Sr</option>
				<option>Estagiário</option>
				<option>Gerente Administrativa</option>
				<option>Gerente Comercial</option>
				<option>Gerente De Governança</option>
				<option>Gerente De Projetos</option>
				<option>Líder Técnico</option>
				<option>PJ - Analista de Teste</option>
				<option>PJ - CEO</option>
				<option>PJ - Marketing</option>
				<option>PJ</option>
			</select>
			</div>

			<div class="form-group">
			<label>Área </label>
			<select name="area" class="form-control">
				<option select disabled selected="true">Selecione a área</option>
				<option>Administrativo e Financeiro</option>
				<option>Desenvolvimento e Manutenção de Sistemas</option>
				<option>Governança Corporativa</option>
				<option>Governança TI/Segurança da Informação</option>
				<option>Informações Gerenciais</option>
				<option>Infraestrutura</option>
				<option>Inovação</option>
				<option>Marketing</option>
				<option>Negócios</option>
				<option>Operações</option>
				<option>Operações e Tecnologia</option>
				<option>Pré-Vendas/Implatação</option>
				<option>Projetos e relacionamento Internacional</option>
				<option>Quality Assurance</option>
				<option>Recursos Humanos</option>
			</select>			
		</div>

		<div class="form-group">
			<label>Salário</label>

			<input type="text" id="salario" name="salario" class="form-control" required="true" value="" placeholder="Digite o salário" data-thousands="." data-decimal="," data-prefix="R$ " />
		</div>
		<div class="form-group" >
			<button type="submit" class="btn btn-success" style="float:right; ">Enviar</button>
		</div>
	</form> 
	<a href="listafunc.php"><button type="submit" class="btn btn-primary">Voltar</button></a>
</div>
</body>

<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;  
    if((tecla>47 && tecla<58)) return true;
    else{
     if (tecla==8 || tecla==0) return true;
else  return false;
    }
}
</script>

<script type="text/javascript">
	$("#salario").maskMoney();
</script>

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
</html>