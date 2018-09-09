<?php
require_once 'Conexao.php';
###############TESTE LUCAS###################################################
    $sql = "SELECT 'teste' AS 'chamado'";

	$result = mysqli_query($con, $sql);

	$totalRegistros = mysqli_num_rows ($result);

    echo "Total de linhas: " . $totalRegistros . "<br><br>";

	while ($row = mysqli_fetch_assoc($result)) {
         echo $row['chamado'];
     }
#############################################################################
VERIFICAÇÃO
if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
   mysqli_close($conn);
############################################################################# 

//MOSTRAR ULTIMO ERRO
echo mysqli_error($conexao);


?>