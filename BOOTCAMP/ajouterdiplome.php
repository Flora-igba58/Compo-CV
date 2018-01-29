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
<h1><legend><strong><center>AJOUTER DIPLOME</center></strong></legend></h1><br><br><br>
<form role="form">
<div class="col-sm-6 col-sm-offset-3">
	<div class="form-group">
		<label>ETABLISSEMENT</label>
		<input type="type" class="form-control" name="etablissement" placeholder="nom de l'etablissement">
	</div>

						
	<div class="form-group">
		<label>DIPLOME</label>
		<input type="type" class="form-control" name="diplome" placeholder="le diplôme obtenue">

		<div class="form-group">
			<label>DATE D'OBTENTION</label>
			<input type="text" class="form-control"  name="date d'otention" placeholder="jj//mm//aaaa">
		</div>
	</div><button button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">VALIDER</button>
</div>
</form>
</body>
</html>