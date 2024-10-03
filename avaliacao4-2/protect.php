<?php 
require_once 'conexao.php';
if(!isset($_SESSION)){
     session_start();
}

 if(!isset($_SESSION['usuario'])){
      die("Acesso negado, você não está logado! <p> <a href=\"login.php\">Entrar</a></p>");
 }
?>