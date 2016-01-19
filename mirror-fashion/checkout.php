 <!DOCTYPE HTML>
 <html>
	<head>
		<title>Checkout - Mirror Fashion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-witdh">
		<link rel="stylesheet" href="css/checkout.css">
		<link rel="stylesheet" href="css/bootstrap-flatly.css">
	</head>
	<body>
	<style>
	.navbar{
		margin: 0;
	}
	</style>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="img/logo-rodape.png" alt="Logo da Mirror Fashion"></a>
			<button class="navbar-toggle type="button" data-target=".navbar-collapse" data-toggle="collapse">
			<span class="glyphicon glyphicon-align-justify"></span>
			</button>
		</div>
		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Perguntas frequentes</a></li>
			<li><a href="#">Entre em contato</a></li>
		</ul>
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha</h1>
			<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-lg-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra:</h2>
						</div>
						<img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive hidden-xs">
							<dl>
						<div class="panel-body">
								<dt>Nome</dt>
								<dd><?php print $_POST['nome']; ?></dd>
								
								<dt>Preço</dt>
								<dd id="preco"><?php print $_POST['preco']; ?></dd>
								
								<dt>Cor</dt>
								<dd><?php print $_POST['cor']; ?></dd>
								
								<dt>Tamanho</dt>
								<dd><?php print $_POST['tamanho']; ?></dd>			
							</dl>
							
							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt valor" id="total" class="form-control">
									<?php print $_POST["preco"] ;?>
								</output>
						</div>
					</div>
				</div>
				
					<form action="#" class="col-sm-8 col-lg-9">
						<div class="row">
							<fieldset class="col-md-6">
								<legend>Dados pessoais</legend>
								<div class="form-group">
									<label for="nome">Nome</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" id="nome" name="nome" autofocus required>
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<div class="input-group">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control" id="email" name="email" placeholder="seu-email@exemplo.com" required>
									</div>
								</div>
								<div class="form-group">
									<label for="cpf">CPF</label>
									<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-file"></span></span>
										<input data-mask="999.999.999-99" type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
									</div>
								</div>
								<div class="form-group">
									<label>
										<input type="checkbox" value="sim" name="spam" checked>
										Quero receber spam da Mirror Fashion.
									</label>
								</div>
							</fieldset>
							<fieldset class="col-md-6">
								<legend>Cartão de Crédito</legend>
								<div class="form-group">
									<label for="numero-cartao">Número - CVV</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
										<input data-mask="9999 9999 9999 9999 - 999" type="text" class="form-control" id="numero-cartao" name="numero-cartao" placeholder="0000 0000 0000 - 000" required>
									</div>
								</div>
								<div class="form-group">
									<label for="bandeira-cartao">Bandeira</label>
									<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
										<select class="form-control" id="bandeira-cartao" name="bandeira-cartao" required>
											<option>Escolha bandeira do seu cartão</option>
											<option value="master">MasterCard</option>
											<option value="visa">Visa</option>
											<option value="amex">American Express</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="validade-cartao"></label>
									<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
										<input type="month" id="validade-cartao" class="form-control" name="validade-cartao" required>
									</div>	
								</div>
							</fieldset>
						</div>
						<button type="submit" class="btn btn-lg pull-right btn-primary">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar Pedido
						</button>
					</form>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/inputmask-plugin.js"></script>
		<script src="js/converteMoeda.js"></script>
		<script src="js/testaConversao.js"></script>
		
		<script src="js/total.js"></script>
	</body>
 </html>