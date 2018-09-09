<?php

    $conexao = mysqli_connect('localhost', 'set', '1234', 'chamados') or die('Erro ao conectar com o Banco de Dados');
    //Acentuação nos campos passada para o banco de dados(não cagar)
    mysqli_set_charset($conexao, 'utf8');

    
    // / check connection /
    // if (!$con) {
    //     printf("Connect failed: %s\n", mysqli_connect_error());
    //     exit();
    // }


?>