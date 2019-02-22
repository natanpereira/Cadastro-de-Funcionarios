<?php 
session_start();
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);
include_once "funcoes.php";
include_once "configuracao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$result = mysql_query("SELECT * FROM usuario 
WHERE login = '$login' AND senha_usuario = '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:listafunc.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.php');
   
  }
?>