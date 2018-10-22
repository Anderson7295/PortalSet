<!DOCTYPE HTML>

<?php require_once '../php/Conexao.php'; ?>
<?php require_once '../php/DataHoraAtual.php';?>

<html>
	<head>
		<title>Pesquisar (TÉCNICO)</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css"/>
		<link rel="icon" type="image/png" href="../images/icons/Icons8-Windows-8-Files-View-File.ico"/>
	</head>
	<body>
 
		<!-- Header -->
			<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../Home.html">Set Jeans </a> <a href="https://www.linkedin.com/in/anderson-messias-97002a141"><span>by ANDERSON</span></a> </div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
		<nav id="menu">
				<ul class="links">
					<li><a href="../Home.html">Página Inicial</a></li>
					<li><a href="../Formulario.html">Chamados e dúvidas</a></li>
					<li><a href="../filtrosChamados/FiltrarChamados.php">Pesquisar chamados</a></li>
					<li><a href="../FormularioLogin/LoginChamados.html">Atender chamados</a></li>
				</ul>
			</nav>

			<br><br>
    
    <h4> <br> Filtros:  </h4>
			
			<section>
				<div class="table-wrapper">
					<table>
						<thead>
							<tr>
								<th>Editar</th>
								<th>CH</th>
								<th width = "1100px" heigth = "10px">Descrição</th>
								<th>Nome</th>	
								<th>Tipo</th>	
							</tr>
						</thead>
						<tbody>
							<?php

								if( isset($_POST['chamado'])) $ch = $_POST['chamado'];
								if( isset($_POST['dataAbertura'])) $dataAbertura = $_POST['dataAbertura'];
								if( isset($_POST['dataAbertura2'])) $dataAbertura2 = $_POST['dataAbertura2'];
								if( isset($_POST['dataFechamento'])) $dataFechamento = $_POST['dataFechamento'];
								if( isset($_POST['dataFechamento2'])) $dataFechamento2 = $_POST['dataFechamento2'];
								if( isset($_POST['nome'])) $nome = $_POST['nome'];
								if( isset($_POST['urgencia'])) $urgencia = $_POST['urgencia'];
								if( isset($_POST['status'])) $status = $_POST['status'];
								if( isset($_POST['tipo'])) $tipo = $_POST['tipo'];
								
								if(!empty($ch))
								{
									$filtros[] = sprintf("NumeroChamado = '%s'", $ch);
									$mostrar[] = sprintf("NumeroChamado = '%s'", $ch);
								}
								if(!empty($nome))
								{
									$filtros[] = sprintf("NomeUsuario = '%s'", $nome);
									$mostrar[] = sprintf("NomeUsuario = '%s'", $nome);
								}
								if(!empty($urgencia))
								{
									$filtros[] = sprintf("Urgencia = '%s'", $urgencia);
									$mostrar[] = sprintf("Urgencia = '%s'", $urgencia);
								}
								if(!empty($status))
								{
									$filtros[] = sprintf("Status = '%s'", $status);
									$mostrar[] = sprintf("Status = '%s'", $status);
								}
								if(!empty($tipo))
								{
									$filtros[] = sprintf("Tipo = '%s'", $tipo);
									$mostrar[] = sprintf("Tipo = '%s'", $tipo);
								}
								
								// BUSCA POR PERÍODO DE DATA ABERTURA
								if(isset($dataAbertura) && isset($dataAbertura2))
								{
									if(!empty($dataAbertura && $dataAbertura2))
									{
										$filtros[] = sprintf(" cast(DataAbertura as date) BETWEEN '%s'", $dataAbertura);
										$filtros[] = sprintf(" '%s'", $dataAbertura2);
										$mostrar[] = sprintf("Data de abertura  = entre '%s'", date("d-m-Y",strtotime($dataAbertura)));
										$mostrar[] = sprintf("e '%s'", date("d-m-Y",strtotime($dataAbertura2)));
									}
									else
									{
										if(!empty($dataAbertura))
										{
											$filtros[] = sprintf("cast(DataAbertura as date) = '%s'", $dataAbertura);
											$mostrar[] = sprintf("Data de abertura  = '%s'", date("d-m-Y",strtotime($dataAbertura)));
										}
										else
										{
											if(!empty($dataAbertura2))
											{
												$filtros[] = sprintf("cast(DataAbertura as date) = '%s'", $dataAbertura2);
												$mostrar[] = sprintf("Data de abertura  = '%s'", date("d-m-Y",strtotime($dataAbertura2)));
											}
										}
									}
								}

								
								// BUSCA POR PERÍODO DE DATA FECHAMENTO
								if(isset($dataFechamento) && isset($dataFechamento2))
								{
									if(!empty($dataFechamento && $dataFechamento2))
									{
										$filtros[] = sprintf(" cast(DataFechamento as date) BETWEEN '%s'", $dataFechamento);
										$filtros[] = sprintf(" '%s'", $dataFechamento2);
										$mostrar[] = sprintf("Data de fechamento  = entre '%s'", date("d-m-Y",strtotime($dataFechamento)));
										$mostrar[] = sprintf("e '%s'", date("d-m-Y",strtotime($dataFechamento2)));
									}
									else
									{
										if(!empty($dataFechamento))
										{
											$filtros[] = sprintf("cast(DataFechamento as date) = '%s'", $dataFechamento);
											$mostrar[] = sprintf("Data de fechamento  = '%s'", date("d-m-Y",strtotime($dataFechamento)));
										}
										else
										{
											if(!empty($dataFechamento2))
											{
												$filtros[] = sprintf("cast(DataFechamento as date) = '%s'", $dataFechamento2);
												$mostrar[] = sprintf("Data de fechamento  = '%s'", date("d-m-Y",strtotime($dataFechamento2)));
											}
										}
									}
								}

								//MOSTRAR FILTROS UTILIZADOS INCLUINDO SEPARADOR
								if(isset($filtros))
								{				
									foreach($mostrar as $valores) echo $valores . " - -|- - ";
								}
								


								if(isset($filtros))
								{
									$sql = "SELECT * FROM chamadosset WHERE ".implode(' AND ', $filtros);//importando todos os filtros na pesquisa do banco
									$result = mysqli_query($conexao, $sql);

									while ($row = mysqli_fetch_assoc($result))
									{								
										echo	'<tr>';
										echo	'<form action = "EditarChamados.php" method="POST">';
										echo	'<input type="hidden" name = "ch" id = "ch" value ="'.$row["NumeroChamado"].'">'; //passa o numero do chamado para a tela de edição
										echo	'<td><button type = "submit" id = "btn" class="button">!</button></td>';
										echo	'<td>'. $row["NumeroChamado"]. '</td>';
										echo	'<td >'. wordwrap($row["Mensagem"], 15, "\n", true) . '</td>';
										echo	'<td>'. $row["NomeUsuario"]. '</td>';
										echo	'<td>'. $row["Tipo"]. '</td>';
										echo	'</form>';
										echo	'</tr>';
									}
									$totalRegistros = mysqli_num_rows ($result);
								}

								
								//var_dump($sqlteste);
									
								// COM FILTRO DE DATA
								// $filtroData = $date;//default data HOJE
								// if( isset($_POST['data']))
								// {
								// 	$filtroData = $_POST['data'];
								// 	$sql = "SELECT * FROM chamadosset WHERE cast(DataAbertura as date) = '$filtroData' ";
								// 	$result = mysqli_query($conexao, $sql);
								// 	while ($row = mysqli_fetch_assoc($result))
								// 	{
								// 		echo	'<tr>';
								// 		echo	'<td>'. $row["NumeroChamado"]. '</td>';
								// 		echo	'<td width = "100px" heigth = "50px">'. $row["Mensagem"]. '</td>';
								// 		echo	'<td>'. $row["NomeUsuario"]. '</td>';
								// 		echo	'<td>'. $row["Tipo"]. '</td>';
								// 		echo	'</tr>';
								// 	}
									
								// 	$totalRegistros = mysqli_num_rows ($result);	
								// }

								
								// MOSTRANDO DATA INVERTIDA
								//echo date('d-m-Y', strtotime($filtroData));
							
								//FECHA CONEXÃO COM O BANCO
								mysqli_close($conexao);
							?>
						</tbody>


						<tfoot>
							<tr>
								<td colspan="3"> <b>Total:</b> </td>
								<td>
									<?php
										// MOSTRA TOTAL APENAS SE EXISTIR VALOR NA VARIAVEL
										if(isset($totalRegistros))
										{
											echo $totalRegistros;
										}
									?> 
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
            </section>
       
            <!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contate-nos</h2>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Nome</label>
							<input name="name" id="name" type="text" placeholder="Digite seu nome">
						</div>
						<div class="field half">
							<label for="email">E-mail</label>
							<input name="email" id="email" type="email" placeholder="Digite seu e-mail">
						</div>
						<div class="field">
							<label for="message">Mensagem</label>
							<textarea name="message" id="message" rows="6" placeholder="Escreva sua mensagem"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Enviar Mensagem" class="button alt" type="submit"></li>
						</ul>
					</form>

					<ul class="icons">
						<!-- <li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li> -->
						<li><a href="https://www.facebook.com/setjeansoficial" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/setjeansoficial/" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<!-- <div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div> -->

				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
 </body>
</html>