<?php

    require_once 'Conexao.php';
    require 'DataHoraAtual.php';


    ############# INSERIR DADOS NA TABELA DE CHAMADOS #################
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    $email = $_POST['email'];
    $ramal = $_POST['ramal'];
    $selecao = $_POST['selecao'];
    $local = $_POST['local'];
    $urgencia = $_POST['urgencia'];


    //ARMAZENA O COMANDO SQL PARA ENVIAR AO BANCO JUNTO DA CONEXÃO
    $sql = "INSERT INTO chamadosset (DataAbertura, NomeUsuario, Mensagem, Email, Ramal, Tipo, Setor, Urgencia) 
    VALUES ('$dateTime', '$nome', '$mensagem', '$email', '$ramal', '$selecao', '$local', '$urgencia')";

    //INSERE NO BANCO E VERIFICA SE INSERIU
    if (mysqli_query($conexao, $sql)) {
        echo"<script language='javascript' type='text/javascript'>alert('SOLICITAÇÃO ENVIADA COM SUCESSO.');window.location.href='../Home.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
        //echo"<script language='javascript' type='text/javascript'>alert('FALHA NO ENVIO DA SOLICITAÇÃO.');window.location.href='../Formulario.html';</script>";
    }

    //require 'mostrarTodos.php'; 

    //FECHA CONEXÃO COM O BANCO
    mysqli_close($conexao);



    #############################################################################


?>