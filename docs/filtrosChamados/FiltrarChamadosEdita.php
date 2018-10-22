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

			<br><br><br>

			<h3>Pesquisa de Chamados</h3>
			<form action="TabelaChamadosEdita.php" method = "POST"> <b>Defina os filtros:</b> <br><br>
				<div class="row">
					<div class="col-sm-5">
						<input id = "chamado" name = "chamado" type = "text" placeholder = "Nº do Chamado" value = ""  style="width:150px;" >
					</div>	

					<div class="col-sm-10">						
						<input id = "nome" name = "nome" type = "text" placeholder = "Nome Usuário" value = "" style="width:400px;">
					</div>
				</div>

				<br><br>
				
				<div class="row">
					<div class="col-sm-3">
						<select name="urgencia" id="urgencia" style = "color:grey; width:400px">
							<option value="">Urgência do chamado</option>
							<option>Pode aguardar</option>
							<option>Atrapalha o fluxo de trabalho</option>
							<option>Interrompe o fluxo de trabalho exporadicamente</option>
							<option>Interrompe totalmente o fluxo de trabalho</option>
							<option>Urgente</option>
							<option>Emergência</option>
						</select>
					</div>

					<div class="col-sm-3">
						<select name="status" id="status" style = "color:grey; width:150px">
							<option value="">Status</option>
							<option>Aberto</option>
							<option>Em andamento</option>
							<option>Fechado</option>
						</select>
					</div>

					<div class="col-sm-3">
						<select name="tipo" id="tipo" style = "color:grey; width:150px">
							<option value="">Tipo de chamado</option>
							<option>Problema</option>
							<option>Dúvida</option>
						</select>
					</div>
				</div>
				
				<br><br>

				<div class="row">
					<div class="col-sm-3">
						<label for="filtroDataAbertura">Data de abertura:</label>  
						De <input id = "dataAbertura" name = "dataAbertura" type = "date" value = "" style = "color:black;"> à <input id = "dataAbertura2" name = "dataAbertura2" type = "date" value = "" style = "color:black;">
					</div>

					<div class="col-sm-3">
						<label for="filtroDataFechamento">Data de fechamento:</label>  
						De <input id = "dataFechamento" name = "dataFechamento" type = "date" value = "" style = "color:black;"> à <input id = "dataAFechamento2" name = "dataFechamento2" type = "date" value = "" style = "color:black;">
					</div>
				</div>

				<!-- MAIS FILTROS -->
				<br><br>
				<button class="button alt"  type="submit">
					Filtrar
				</button>

				<br><br><br><br><br><br><br><br><br><br>

				<section id = "tabelaChamados"></section>

			</form>
			
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