 <!DOCTYPE HTML>
 <html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width>">
		<title> Produtos Mirror-Fashion</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
		<link rel="stylesheet" href="css/produto.css">
	</head>
	<body>
		<?php include("cabecalho.php"); ?>
		<div class="produto-back">
			<div class="container">
				<div class="produto">
					<h1>Fuzzy Cardigan</h1>
					<p>Por apenas R$ 129,00</p>
					
					<form>
						<fieldset class="cores">
							<legend>Escolha a cor:</legend>
							
							<input type="radio" name="cor" value="verde" id="verde" checked>
							<label for="verde">
								<img src="img/produtos/foto2-verde.png" alt="Cor verde">
							</label>
							
							<input type="radio" name="cor" value="rosa" id="rosa">
							<label for="rosa">
								<img src="img/produtos/foto2-rosa.png" alt="Cor rosa">
							</label>
							
							<input type="radio" name="cor" value="azul" id="azul">
							<label for="azul">
								<img src="img/produtos/foto2-azul.png" alt="Cor azul">
							</label>
						</fieldset>
						<fieldset class="tamanho">
							<legend>
								Escolha o tamanho:
							</legend>
							<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
						</fieldset>
						<input type="submit" class="comprar" value="Comprar">
					</form>
				</div>
				<div class="detalhes">
					<h2>Detalhes do produto</h2>
					<p>O Fuzzy Cardigan é fantástico para a meia estação, quando o friozinho começa a chegar. Seu estilo parisiense combina com o charme da estação.
					Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. 
					Compre já e receba hoje mesmo pela nossa entrega ajato.</p>
					
					<table>
						<thead>
							<tr>
								<th>Característica</th>
								<th>Detalhe</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Modelo</td>
								<td>Cardigã 7845</td>
							</tr>
							<tr>
								<td>Material</td>
								<td>Algodão e poliester</td>
							</tr>
							<tr>
								<td>Cores</td>
								<td>Azul, Rosa e Verde</td>
							</tr>
							<tr>
								<td>Lavagem</td>
								<td>Lavar a mão</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>
		<?php include("rodape.php"); ?>
	</body>
 </html>