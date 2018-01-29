<?php
include('connexion.php');
$msg="";
if (isset($_POST['btnValider'])){
	$sql= "INSERT INTO codeuses (nom,prenom,dat_nais,photo_pro,specialisation,emaail,mdp,resume,tel) VALUES ('".$_POST['nom']."',
	'".$_POST['prenom']."',
	'".$_POST['date de naissance']."',
	'".$_POST['photo de profil']."',
	'".$_POST['specialisation']."',
	'".$_POST['email']."',
	'".$_POST['mot de passse']."',
	'".$_POST['resume']."',
	'".$_POST['telephone']."',)";
	die($sql);
	$result=mysqli_query($link,$sql);
		if ($result) {
			$msg='Insertion reussie';
		}else{
			$msg=mysqli_error($link);
			die();
		}
	}

	if (isset($_GET['id']))
	{
		$update="SELECT * FROM codeuses WHERE id=".$_GET['id'];
		$res=mysqli_query($link,$update);
		$dataU=mysqli_fetch_array($res);
	}

	if (isset($_GET['sup']))
	{
		$delete="DELETE  FROM categories WHERE id=".$_GET['sup'];
		$res=mysqli_query($link,$delete);
	}
?>
<!DOCTYPE html>
<html lang="">
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
	</nav><div class="vertical-spacer"></div><hr><br><br><br>


<h1><legend><strong><center>PAGE D'INSCRIPTION</center></strong></legend></h1><br><br><br>
					<form role="form">
						<div class="col-sm-6 col-sm-offset-3">
						<div class="form-group">
							<label>NOM</label>
							<input type="text" name="nom" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['nom']; ?>" id="" placeholder="nom">
						</div>

						<div class="form-group">
							<label>PRENOM</label>
							<input type="text" name="nom"  class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['prenom']; ?>" id="" placeholder="prenom">
						</div>

						<div class="form-group">
							<label>DATE DE NAISSANCE</label>
							<input type="text" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['date de naissance']; ?>" id=""  name="nom" placeholder="jj//mm//aaaa">
						</div>

						<div class="form-group">
							<label>PHOTO DE PROFIL</label>:
							<input type="file" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['photo de profil']; ?>" id="exampleInputimage" placeholder="nom de l'image" ><br><br>
						</div>

						<div class="form-group">
							<label>SPECIALISATION</label>
							<input type="text" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['specialisation']; ?>" id="" name="nom" placeholder="votre spécialisation">
						</div>

						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['email']; ?>" id="" name="email" placeholder="votre email">
						</div>
						<div class="form-group">
							<label>MOT DE PASSSE</label>
							<input type="password" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['mot de passe']; ?>" id="" name="mot de passe" placeholder="votre mot de passe">
						</div>

						<div class="form-group">
							<label>RESUME</label>
							<textarea type="password" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['resume']; ?>" id="" name="message" placeholder="votre description" ></textarea>
						</div>

					<div class="form-group">
						<label>TELEPONE</label>
						<input type="text" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['telephone']; ?>" id="" name="nom" placeholder="votre numero">
					</div>	
						
	<button button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">VALIDER</button>
					</form>
				</div>
				<div class="col-md-2"></div>
				</div><br>
				<div class="row">
					<table border="1">
						<thead>
							<tr>
								<th>nom</th>
								<th>prenom</th>
								<th>date de naissance</th>
								<th>photo de prophile</th>
								<th>specialisation</th>
								<th>email</th>
								<th>mot de passe</th>
								<th>resume</th>
								<th>telephone</th>
							</tr>
							
						</thead>
						<tbody>
<?php 
			$n=1;
			$list="SELECT*FROM codeuses";
			$res= mysqli_query($link,$list);
			while ($data = mysqli_fetch_array($res))
			{	
		 ?>

								
							
						 ?>
						 <tr>
						 	<td><?php echo $n; ?></td>
						 	<td><?php echo $data['nom']; ?></td>
						 	<td><?php echo $data['prenom']; ?></td>
						 	<td><?php echo $data['date de naissance']; ?></td>
						 	<td><?php echo $data['photo de profil']; ?></td>
						 	<td><?php echo $data['specialisation']; ?></td>
							<td><?php echo $data['email']; ?></td>
							<td><?php echo $data['mot de passe']; ?></td>
							<td><?php echo $data['description']; ?></td>
							<td><?php echo $data['telephone']; ?></td>
		<td><a href="?id=<?php echo $data['id'];?>" class="btn btn-primary" >Modifier</a><a href="?sup=<?php echo $data['id'];?>" class="btn btn-danger">Supprimer</a></td>

				</tr>
				<?php $n++;
				 } ?>


						 </tr>
						</tbody>
					</table>
				</div>

				<?php 
					if(isset($_POST["submit"]))
						{


						if(isset($_GET['id']))
							{ 

								$sql="UPDATE codeuses SET 
								nom='".$_POST['nom']."',
								prenom='".$_POST['prenom']."',
								date de naissance='".$_POST['date de naissance']."',
								photo de profil='".$_POST['photo de profil']."',
								specialisation='".$_POST['specialisation']."',
								email='".$_POST['email']."',
								 mot de passe='".$_POST['mot de passe']."',
								 description='".$_POST['resume']."',
								 telephone='".$_POST['telephone']."',
								WHERE id=".$_GET['id'];
							}else
								{
						
									$sql="INSERT INTO codeuses(nom,prenom,dat_nais,photo_pro,specialisation,emaail,mdp,resume,tel) 
									VALUES(
											'".$_POST["nom"]."',
											'".$_POST["prenom"]."'
											'".$_POST["date de naissance"]."'
											'".$_POST["photo de profile"]."'
											'".$_POST["specialisation"]."'
											'".$_POST["email"]."'
											'".$_POST["mot de passe"]."'
											'".$_POST["resume"]."'
											'".$_POST["telephone"]."'
										)";//die(sql);
								}
						$result=mysqli_query($link,$sql);
						if ($result) {
						echo "<h3 style=color:green>Super! Insertion reussie</h3>";
						# code...
						}else{
						echo "mysql_error()";
						die();
					}

			}
			 ?>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
</body>
</html>