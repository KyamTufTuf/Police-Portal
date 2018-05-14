<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<![endif]-->
			<title>LSPD</title>
			<!-- BOOTSTRAP CORE STYLE  -->
			<link href="assets/css/bootstrap.css" rel="stylesheet" />
			<!-- FONT AWESOME STYLE  -->
			<link href="assets/css/font-awesome.css" rel="stylesheet" />
			<!-- CUSTOM STYLE  -->
			<link href="assets/css/style.css" rel="stylesheet" />
			<!-- GOOGLE FONT -->
			<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

		</head>
		<?php include( "config.php"); session_start(); if (isset($_SESSION[ 'id'])) { echo '

		<body>
			<div class="navbar navbar-inverse set-radius-zero" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
						<img src="https://i.imgur.com/oVTxjCC.png" width="240" height="105"/>
						</a>
					</div>
					<div class="right-div">
						<a href="logout.php" class="btn btn-danger pull-right">Finalizar</a>
					</div>
				</div>
			</div>
			<!-- LOGO HEADER END-->
			<section class="menu-section">
				<div class="container">
					<div class="row ">
						<div class="col-md-12">
							<div class="navbar-collapse collapse ">
								<ul id="menu-top" class="nav navbar-nav navbar-right">
									<li>
									<a href="index.php" class="menu-top-active"><i class="fas fa-home"></i> INICIO</a>
									</li>
									<li>
									<a href="add_criminal.php"><i class="fas fa-bars"></i> Fichar Criminoso</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- MENU SECTION END-->
			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>Preencha a ficha criminal corretamente!
					<p></p>
					<p></p>
				</div>
				<div class="panel-body">
					<form action="add_criminal_post.php" method="post">
						<p>
							<div class="form-group">
								<label for="nom">Nome Completo</label> :
								<p class="help-block">Preencha com o nome completo do Criminoso</p>
								<input type="text" name="nom" id="nom" class="form-control" required />
								
							</div>
							<div class="form-group">
								<label for="message">RG</label> :
								<p class="help-block">Numero de identificação do Criminoso</p>
								<input type="text" name="telephone" id="telephone" class="form-control" required />
								
							</div>
							<div class="form-group2">
								<label for="message">Crime Hediondo</label> :
								<p class="help-block">Responda com SIM ou NÀO</p>
								<input type="text" name="steam" id="steam" class="form-control"/>
								
							</div>
							<div class="form-group3">
								<label for="message">Crime</label> :
								<p class="help-block">Latrocínio/Homicídio qualificado/Roubo</p>
								<input type="text" name="crime" id="crime" class="form-control" required />
								
							</div>
							<div class="form-group4">
								<label for="message">Tempo de Prisão</label> :
								<p class="help-block">Ex: 15 Anos, 30 Anos, 50 Anos</p>
								<input type="text" name="sanction" id="sanction" class="form-control" required />
								
							</div>
							<input type="submit" value="Enviar" class="btn btn-info />
						</p>
					</form>
					<p></p>
					<img src="https://image.noelshack.com/fichiers/2015/40/1443969486-lspd-logo-modern-2.png" align="center">
					</div>
				</div>
				<!-- CONTENT-WRAPPER SECTION END-->
				<section class="footer-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
                   &copy; 2018 PAINEL |
				 	  <a> Feito por: Davendrix - Modificações por: Mayk</a>
							</div>
						</div>
					</div>
				</section>
				<!-- FOOTER SECTION END-->
				<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
				<!-- CORE JQUERY  -->
				<script src="assets/js/jquery-1.10.2.js"></script>
				<!-- BOOTSTRAP SCRIPTS  -->
				<script src="assets/js/bootstrap.js"></script>
			</body>'; } else { header( "Location: login.php"); } ?>
		</html>
