<?php include('dashboard.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	<title> CV CODEUSES </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top navbar-transparent" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">SHEISTHECODE CV</a>
			</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">A PROPOS</a></li>
						<li><a href="inscription.php">S'INSCRIRE</a></li>
						<li><a href="login.php">SE CONNECTER</a></li>

					</ul>
				</div>
			
		</div>
	</nav>


	<div class="vertical-spacer"></div><hr><br><br><br>
	<h1><legend><strong><center>MODIFIER PROPHIL</center></strong></legend></h1><br><br><br>
	<div>
		<div class="col-sm-6 col-sm-offset-3">
					<form role="form">
						<div class="col-sm-6>
						<div class="form-group">
							<label>NOM</label>
							<input type="text" name="nom" class="form-control" value="" id="" placeholder="nom">
						</div>

						<div class="form-group">
							<label>PRENOM</label>
							<input type="text" name="nom"  class="form-control" value="" id="" placeholder="prenom">
						</div>

						<div class="form-group">
							<label>DATE DE NAISSANCE</label>
							<input type="text" class="form-control" value="" id=""  name="nom" placeholder="jj//mm//aaaa">
						</div>

						<div class="form-group">
							<label>PHOTO DE PROFIL</label>:
							<input type="file" class="form-control" value="" id="exampleInputimage" placeholder="nom de l'image" ><br><br>
						</div>

						<div class="form-group">
							<label>SPECIALISATION</label>
							<input type="text" class="form-control" value="" id="" name="nom" placeholder="votre spécialisation">
						</div>

						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" class="form-control" value="" id="" name="email" placeholder="votre email">
						</div>
						<div class="form-group">
							<label>MOT DE PASSSE</label>
							<input type="password" class="form-control" value="" id="" name="mot de passe" placeholder="votre mot de passe">
						</div>

						<div class="form-group">
							<label>RESUME</label>
							<textarea type="password" class="form-control" value="" id="" name="message" placeholder="votre description" ></textarea>
						</div>

					<div class="form-group">
						<label>TELEPONE</label>
						<input type="text" class="form-control" value="" id="" name="nom" placeholder="votre numero">
					</div>	
						
	<button button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">MODIFIER</button>
					</form>
				</div>
	</form><br><br>

	</div>
	</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
</body>
</html>