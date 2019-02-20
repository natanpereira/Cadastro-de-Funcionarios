<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

if ($_POST) {
	$opcao = $_POST['escolha'];
	echo($opcao);
}else{
	echo "nada foi escolhido";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<form method="post" action="teste.php">
	<div>
		<label>escolha a opção:</label>
			<select name="escolha" id="escolha">
				<option select disabled selected="true">Escolha uma opção </option>
				<option value="curso">Curso</option>
				<option value="Duo">Duo</option>
				<option value="PHP">PHP</option>
			</select>
			
				<select name="escolha2" id="escolha2 ">
					<option value="teste">teste</option>
					<option value="teste2">teste2</option>
					<option value="teste3">teste3</option>
					<option value="teste4">teste4</option>
				</select>
		
				<select name="escolha3" id="escolha3 ">
					<option value="teste">PHP</option>
					<option value="teste2">HTML</option>
					<option value="teste3">JAVA</option>
					<option value="teste4">BOOTSTRAP</option>
				</select>

			<div class="form-group">
			<button type="submit" class="btn btn-success">Enviar</button>	
			
		</div>
	</div>
	<select id="options" onchange="optionCheck()">


<option value="mostra"> Mostra Div</option>
<option value="goto">Vai para o Google</option>

</select>

<div id="hiddenDiv" style="height:100px;width:300px;border:1px;visibility:hidden;">
Eu estou visível agora!
</div>
</form>
<script type="text/javascript">
    function optionCheck(){
        var option = document.getElementById("options").value;
        if(option == "show"){
            document.getElementById("hiddenDiv").style.visibility ="visible";
        }
        if(option == "goto"){
            window.location = "http://google.com";
        }
    }
</script>
</body>
</html>