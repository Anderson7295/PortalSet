<!DOCTYPE HTML>

<?php require_once 'php/Conexao.php'; ?>
<?php require_once 'php/DataHoraAtual.php';?>

<html>
	<head>
		<title>Portal Set Jeans</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
 
		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="Home.html">Set Jeans <span>by ANDERSON</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
		<nav id="menu">
				<ul class="links">
					<li><a href="Home.html">Página Inicial</a></li>
					<li><a href="Formulario.html">Chamados e dúvidas</a></li>
					<li><a href="FormularioLogin/LoginChamados.html">Atender chamados</a></li>
					<li><a href="VerChamados.php">Ver todos os chamados abertos</a></li>
				</ul>
			</nav>

			<br><br><br>

			<h3>Chamados Abertos</h3>

			<h4>Hoje: <?php echo $date ?> </h4>
			
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>CH</th>
							<th>Descrição</th>
							<th>Nome</th>	
							<th>Tipo</th>	
						</tr>
					</thead>
					<tbody>
						<?php
						 
							$sql = "SELECT * FROM chamadosset";
							$result = mysqli_query($conexao, $sql);
							while ($row = mysqli_fetch_assoc($result))
							{
								echo	'<tr>';
								echo	'<td>'. $row["NumeroChamado"]. '</td>';
								echo	'<td width = "30px">'. $row["Mensagem"]. '</td>';
								echo	'<td>'. $row["NomeUsuario"]. '</td>';
								echo	'<td>'. $row["Tipo"]. '</td>';
								echo	'</tr>';
							}
							$totalRegistros = mysqli_num_rows ($result);
							//FECHA CONEXÃO COM O BANCO
							mysqli_close($conexao);
						?>
					</tbody>


					<tfoot>
						<tr>
							<td colspan="2"> <b>Total:</b> </td>
							<td> <?php echo $totalRegistros ?> </td>
						</tr>
					</tfoot>
				</table>
			</div>


			

			<!-- CRIAR FILTRO PARA MOSTRAR APENAS CHAMADOS DOI FILTRO DO "H4" -->
			<!-- <h4>Alternate</h4>
			<div class="table-wrapper">
				<table class="alt">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Item 1</td>
							<td>Ante turpis integer aliquet porttitor.</td>
							<td>29.99</td>
						</tr>
						<tr>
							<td>Item 2</td>
							<td>Vis ac commodo adipiscing arcu aliquet.</td>
							<td>19.99</td>
						</tr>
						<tr>
							<td>Item 3</td>
							<td> Morbi faucibus arcu accumsan lorem.</td>
							<td>29.99</td>
						</tr>
						<tr>
							<td>Item 4</td>
							<td>Vitae integer tempus condimentum.</td>
							<td>19.99</td>
						</tr>
						<tr>
							<td>Item 5</td>
							<td>Ante turpis integer aliquet porttitor.</td>
							<td>29.99</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2"></td>
							<td>100.00</td>
						</tr>
					</tfoot>
				</table>
			</div> -->

		
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
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<!-- <div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div> -->

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>