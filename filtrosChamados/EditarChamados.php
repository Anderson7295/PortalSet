<!DOCTYPE html>



<html lang="pt-BR">
<head>
	<title>Atendimento de chamado</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/Noctuline-Wall-E-Wall-E.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
</head>
<body>

	<?php
		require_once '../php/Conexao.php';
		require_once '../php/DataHoraAtual.php';
		
		$sql = "SELECT * FROM chamadosset WHERE NumeroChamado = '4'";
		$result = mysqli_query($conexao, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
			$linha = $row;

		}		
	?>

	<div class="bg-contact3" style="background-image: url('../images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form action="updateChamado.php" class="contact3-form validate-form" method="POST">
					<ul class="icons">
						<li><a href="../PortalSet/Home.html" class="icon round fas fa-home"><span class="label"></span></a></li>
					</ul>

					<span class="contact3-form-title">
						Atendimento de chamado
					</span>

					<?php
						if($linha['Tipo'] == 'Problema')
						{
							//PROBLEMAS
							echo'<div class="wrap-contact3-form-radio">
									<div class="contact3-form-radio m-r-42">
										<input class="input-radio3" id="radio1" type="radio" name="selecao" value="Dúvida" checked="checked">
										<label class="label-radio3" for="radio1">
											Dúvidas
										</label>
									</div>

									<div class="contact3-form-radio">
										<input class="input-radio3" id="radio2" type="radio" checked = "true" name="selecao" value="Problema">
										<label class="label-radio3" for="radio2">
											Problemas
										</label>
									</div>
								</div>';
						}
						else
						{
							//DÚVIDAS
							echo'<div class="wrap-contact3-form-radio">
									<div class="contact3-form-radio m-r-42">
										<input class="input-radio3" id="radio1" type="radio" checked = "true" name="selecao" value="Dúvida" checked="checked">
										<label class="label-radio3" for="radio1">
											Dúvidas
										</label>
									</div>

									<div class="contact3-form-radio">
										<input class="input-radio3" id="radio2" type="radio" name="selecao" value="Problema">
										<label class="label-radio3" for="radio2">
											Problemas
										</label>
									</div>
								</div>';

						}
					?>

					<div class="wrap-input3 validate-input" data-validate = "Digite uma mensagem">
						<textarea class="input3" name="solucao" >Chamado número: <?php echo $linha['NumeroChamado']; ?>, 	 Aberto em: <?php echo $linha['DataAbertura']; ?> Por: <?php echo $linha['NomeUsuario']; ?> Portador(a) do e-mail para contato: <?php echo $linha['Email']; ?>, ramal para contato: <?php echo $linha['Ramal']; ?></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Digite uma mensagem">
						<textarea class="input3" name="info" readonly > Descrição: <?php echo $linha['Mensagem']; ?></textarea>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Digite uma mensagem">
						<textarea class="input3" name="solucao" placeholder="Digite a solução para o chamado"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button class="button alt" type="submit">
							Salvar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
