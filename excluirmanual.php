<!DOCTYPE html>
<html>
<head>
	<title>Excluir Funcionario</title>
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
<body>


<form method="get">
  <input type="text" name="pesquisa" placeholder="Pesquisar..." />
	<button type="submit" class="btn btn-primary">Buscar</button>
	</form> 

<a href="index.php"><button type="submit" class="btn btn-primary">Voltar</button></a>

<div class="container">
<form method ="post" action="editar.php" >
		<div id="botMostrar" class="form-group" >
			<label>Id</label>
			<input type="text" name="id" class="form-control" readonly="true" value="<?php echo $valor['id_func'];?>" />
		</div>
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" rreadonly="true" value="<?php echo $valor['nome_func'];?>"  />
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
			<input type="text" name="cargo" class="form-control" readonly="true" value="<?php echo $valor['cargo'];?>"  />			
		</div>
		
		<div class="form-group">
			<label>Area</label>
			<input type="text" name="area" class="form-control" readonly="true" value="<?php echo $valor['area'];?>"  />			
		</div>

		<div class="form-group">
			<label>Salario</label>
			<input type="text" name="salario" class="form-control" readonly="true" value="<?php echo $valor['salario'];?>"  />			
		</div>	

		<div class="form-group">
			<button type="submit" class="btn btn-success">Alterar</button>	
				
		</div>
</form>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script> 
$(document).ready(function(){
$("#botMostrar").click(function(){
$("#divResposta").slideToggle(170);
});
});
</script>
</body>
</html>