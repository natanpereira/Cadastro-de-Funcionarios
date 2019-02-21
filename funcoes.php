<?php

function conexao($host,$usuario,$senha,$banco){

	mysql_connect($host,$usuario,$senha) or die("nao consegui conectar com o banco de dados");

	mysql_select_db($banco) or die("banco de dados nao encontrado");
}

function getAssoc($data){
	$retorno = [];
	while($a = mysql_fetch_assoc($data)){
		$retorno[] = $a;
	}
	return $retorno;	
}


function listaFunc(){
		
		$sql = "SELECT * FROM funcionarios";
		$data = mysql_query($sql);
		$retorno = getAssoc($data);
	return $retorno;
}

function cadastrarFunc($nome,$cpf,$dataAd, $cargo, $area, $salario){
	$string_sql = "INSERT INTO funcionarios (id_func,nome_func,cpf_func,data_admissao,cargo,area,salario) VALUES (null,'$nome','$cpf','$dataAd','$cargo','$area','$salario')";
    if(mysql_query($string_sql)){
		header("location:listafunc.php?msg=Cadastro realizado com sucesso");
	}else{
		header("location:listafunc.php?msgErro=Erro ao realizar cadastro");
	}
}


function editarFunc($mostra,$nome_edit, $cargo_edit, $area_edit, $salario_edit){
	$altFunc = "UPDATE funcionarios SET nome_func='$nome_edit', cargo='$cargo_edit', area='$area_edit', salario = '$salario_edit' WHERE id_func = '$mostra'";

	if(mysql_query($altFunc)){
		header("location:listafunc.php?msg=Edição realizada com sucesso");
	}else{
		header("location:listafunc.php?msgErro=Erro ao editar cadastro");
	}
}


function mostraFunc($id_func){
		$sql_mostra = "SELECT * FROM funcionarios WHERE id_func='$id_func'";
		$data_mostra = mysql_query($sql_mostra);
		$retorno_mostra = getAssoc($data_mostra);
	
		return $retorno_mostra;
}

function excluirFunc($params){
	$id = $params['id'];
	$sql = "DELETE FROM funcionarios WHERE id_func = $id";
	
	if(mysql_query($sql)){
		header("location:listafunc.php?msg=Cadastro excluido com sucesso");
	}else{
		header("location:listafunc.php?msgErro=Erro ao excluir cadastro");
	}
}


function listaFuncCargo($cargo){
		
	$sql = "SELECT * FROM funcionarios WHERE cargo = '$cargo'";
	$data = mysql_query($sql);
	$retorno = getAssoc($data);
	return $retorno;
}

?>