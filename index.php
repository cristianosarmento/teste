<?php
	include "conexao.php";
	include "funcoes.php";
?>

<html>
	<head>
		<title>. : CERVEJARIA : .</title>
		<meta charset="utf8" />
		<link rel="shortcut icon" href="imagens/cerveza.jpg" />
		<link rel="stylesheet" href="estilo.css" />
		<style>
			
		</style>
	</head>
	<body>
		<div id="central">
			<div id="geral">
				<div id="topo">
					<h1>CERVEJARIA DUAS CABEÇAS</h1>
				</div>
				<div id="menu">
					<a href="index.php?pagina=inicio">Início</a>
					<a href="index.php?pagina=clientes_listar">Clientes</a>
					<a href="index.php?pagina=funcionarios_listar">Funcionários</a>
					<a href="index.php?pagina=marcas_listar">Marcas</a>
					<a href="index.php?pagina=cervejas_listar">Cervejas</a>
					<a href="index.php?pagina=pedidos_listar">Pedidos</a>
				</div>
				<div id="conteudo">
					<?php
						if( isset( $_GET['pagina'])){
							$pagina = $_GET['pagina'];
						} else{
							$pagina = "inicio";
						}
						
						if( file_exists("$pagina.php"))
							include "$pagina.php";
						else
							include"inicio.php";
					?>
				</div>
				<div id="rodape">
					Todos os direitos reservados
					<?php echo date("Y"); ?>
						<img src="imagens/icone1.png" />
						<img src="imagens/icone2.png" />
						<img src="imagens/icone4.png" />
						<img src="imagens/icone5.png" />
						<img src="imagens/icone6.png" />
						<img src="imagens/icone7.png" />
				</div>
			</div>
		</div>
	</body>
</html>