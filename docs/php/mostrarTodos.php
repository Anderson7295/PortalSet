<?php
###############CONEXAO COM O BANCO PELO ARQUIVO DE CONEXÃO###################
    require_once 'Conexao.php';
#############################################################################   



############## MOSTRAR TODOS OS DADOS DA TABELA DE CHAMADOS #################
    $sql = "SELECT * FROM chamadosset";

 	$result = mysqli_query($conexao, $sql);

 	$totalRegistros = mysqli_num_rows ($result);

     echo "Total de Chamados: " . $totalRegistros . "<br><br>";

    while ($row = mysqli_fetch_assoc($result)) 
    {
        echo "<br>";
        echo join('*',$row);
    }
   // mysqli_close($conexao);
#############################################################################



?>