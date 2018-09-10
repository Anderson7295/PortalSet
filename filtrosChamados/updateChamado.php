<?php

    require_once '../php/Conexao.php';
    require_once '../php/DataHoraAtual.php';


    $solucao = $_POST['solucao'];

    $ch = 4;

    // BUSCAR NO BANCO OK
    // $sql = "SELECT * FROM chamadosset WHERE NomeUsuario = 'anderson' AND Mensagem = 'TESTE'";
    // $result = mysqli_query($conexao, $sql);
    // while ($row = mysqli_fetch_assoc($result))
    // {
    //     echo	'<tr>';
    //     echo	'<td>'. $row["NomeUsuario"]. '</td>';
    //     echo	'<td width = "30px">'. $row["Mensagem"]. '</td>';
    //     echo	'<td>'. $row["Tipo"]. '</td>';
    //     echo	'</tr>';
    // }
    // $totalRegistros = mysqli_num_rows ($result);

    //ATRIBUIR AO BANCO OK
    $sql = "UPDATE chamadosset SET Solucao = $solucao WHERE NumeroChamado = $ch";
    $result = mysqli_query($conexao, $sql);

    //INSERE NO BANCO E VERIFICA SE INSERIU
    if ($result) {
        echo"<script language='javascript' type='text/javascript'>alert('Salvo com sucesso');window.location.href='EditarChamados.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
        echo"<script language='javascript' type='text/javascript'>alert('FALHA, SEUS DADOS NÃO FORAM SALVOS.');window.location.href='EditarChamados.php';</script>";
    }
    



    //FECHA CONEXÃO COM O BANCO
    mysqli_close($conexao);


?>