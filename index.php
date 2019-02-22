<?php
header('Content-type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<title>Login</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="meucss.css">
		<script type="text/javascript" src="meujs.js"></script>
</head>
<body background="images/fundo_linhas.jpg">
<div class="wrapper fadeInDown">
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
  <div id="formContent">
    <div class="fadeIn first">
    	<img  style="width: 15%" src="images/favicon (2).ico" id="icon" alt="User Icon" />
    </div>

    <form method="post" action="login.php" id="formlogin" name="formlogin" >
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login" onkeypress="sem_acento(event)">
      <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Logar">
    </form>
    <div id="formFooter">
      <a class="underlineHover" href="novousuario.php">Cadastrar novo usuário</a>
    </div>
	</form>
  </div>
</div>
</body>



</html>