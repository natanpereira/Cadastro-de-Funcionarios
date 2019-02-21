<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);
include_once "funcoes.php";
include_once "configuracao.php";

$funcionarios = listaFunc();
$funCargo = null;

?>

<!DOCTYPE html>
<html>
	<head>	
		<title>Funcionários</title>
		<link rel="stylesheet" href="https://cdn.datatable.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	</head>
	<body background="images/fundo_linhas.jpg">
		<br/>
		<div class="container">
			<dl>
				<?php if(isset($_GET['msg'])):?>
				<div>
					<div class="alert alert-warning" role="alert">
					<?php echo $_GET['msg']?>
					</div>
				</div>
				<?php endif ?>

				<?php if(isset($_GET['msgErro'])):?>
				<div>
					<div class="alert alert-danger" role="alert">
					 <?php echo $_GET['msgErro']?>
					</div>
				</div>
				<?php endif?>
				<h1 align="center">Funcionários</h1>
				<br/>
				<a href="index.php" class="btn btn-primary"><b><u>P</u>ágina <u>I</u>nicial</b></a>
				<a href="novo.php" class="btn btn-primary"><b><u>N</u>ovo <u>F</u>uncionários</b></a>
				<br/><br/>
			</dl>

			<form method ="get" action="listafunc.php">
				<select id="filtroSelect" name="filtro">
					<option>--Filtrar por cargo--</option>
					<?php foreach($funcionarios as $valor): ?>
					<option value="<?php echo $valor['cargo']?>"><?php echo $valor['cargo']?></option>
					<?php endforeach?>
				</select>
				<button type="submit"  class="btn btn-primary btn-sm" >Atualizar</button>
				<br/><br/>
				<table class="table table-striped table-bordered" id="funcionarios">
					<caption>Funcionários Duo <?php echo date('d.m.Y H:i');?></caption>
					<thead>
						<tr bgcolor="#A4A4A4">
							<th>Nome</th>
							<th>Admissão</th>
							<th>Cargo</th>
							<th>Área</th>
							<th>Salário</th>
							<th>Ações</th>
						</tr>
					</thead>
					<?php if(empty($_GET['filtro']) || $_GET['filtro'] == "--Filtrar por cargo--"): ?>
						<?php foreach($funcionarios as $valor): ?>
						<tr>
							<td><?php echo $valor['nome_func']?></td>
							<td><?php echo date('d/m/Y', strtotime($valor['data_admissao']))?></td>
							<td><?php echo $valor['cargo']?></td>
							<td><?php echo $valor['area']?></td>
							<td><?php echo "R$".$valor['salario']?></td>
							<td align="center">
								<a href="editar.php?id=<?php echo $valor['id_func']?>">Editar</a> |
								<a href="excluir.php?id=<?php echo $valor['id_func']?>">Excluir</a>
							</td>
						</tr>
						<?php endforeach?>
					<?php else: $funCargo = listaFuncCargo($_GET['filtro']);?>
						<?php foreach($funCargo as $valor): ?>
						<tr>
							<td><?php echo $valor['nome_func']?></td>
							<td><?php echo date('d/m/Y', strtotime($valor['data_admissao']))?></td>
							<td><?php echo $valor['cargo']?></td>
							<td><?php echo $valor['area']?></td>
							<td><?php echo "R$".$valor['salario']?></td>
							<td align="center">
								<a href="editar.php?id=<?php echo $valor['id_func']?>">Editar</a> |
								<a href="excluir.php?id=<?php echo $valor['id_func']?>">Excluir</a>
							</td>
						</tr>
						<?php endforeach?>
					<?php endif?>
					</thead>
				</table>
			</form>
		</div>
		<br/><br/>
		<script type="text/javascript">
		$(document).ready(function() {
		    $('#funcionarios').DataTable({
		    	"language": {
		    		"sEmptyTable": "Nenhum registro encontrado",
				    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
				    "sInfoPostFix": "",
				    "sInfoThousands": ".",
				    "sLengthMenu": "_MENU_ resultados por página",
				    "sLoadingRecords": "Carregando...",
				    "sProcessing": "Processando...",
				    "sZeroRecords": "Nenhum registro encontrado",
				    "sSearch": "Pesquisar",

				    "oPaginate": {
				        "sNext": "Próximo",
				        "sPrevious": "Anterior",
				        "sFirst": "Primeiro",
				        "sLast": "Último"
				    },
				    "oAria": {
				        "sSortAscending": ": Ordenar colunas de forma ascendente",
				        "sSortDescending": ": Ordenar colunas de forma descendente"
				    }
			    }
		    });
		} );
		</script>

		<script type="text/javascript">
		var optionValues =[];
		$('#filtroSelect option').each(function(){
		   if($.inArray(this.value, optionValues) >-1){
		      $(this).remove()
		   }else{
		      optionValues.push(this.value);
		   }
		});
		</script>
	</body>
</html>