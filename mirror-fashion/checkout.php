 <!DOCTYPE HTML>
 <html>
	<head>
		<title>Checkout - Mirror Fashion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-witdh">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha</h1>
			<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
		<div class="container">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h2 class="panel-title">Sua compra:</h2>
				</div>
				<img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
					<dl>
				<div class="panel-body">
						<dt>Nome</dt>
						<dd><?php print $_POST['nome']; ?></dd>
						
						<dt>Preço</dt>
						<dd><?php print $_POST['preco']; ?></dd>
						
						<dt>Cor</dt>
						<dd><?php print $_POST['cor']; ?></dd>
						
						<dt>Tamanho</dt>
						<dd><?php print $_POST['tamanho']; ?></dd>			
					</dl>
				</div>
			</div>
		</div>
	</body>
 </html>