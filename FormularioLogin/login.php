<?php 
  require_once '../php/Conexao.php';

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  
    if (isset($entrar)) {
             
      $verifica = mysqli_query($conexao, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='LoginChamados.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:../VerChamados.php");
        }
    }

  mysqli_close($conexao);
?>