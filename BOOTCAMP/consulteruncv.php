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

	<div class="container">
			    <div class="row">
				    <div class="col-md-2"></div>
				    <div class="col-md-8">

					    <form action="" method="POST" role="form">

						<legend> AFFICHER VOTRE CV </legend>
						    <span> <?php echo $msg; ?> </span>

						    <div class="form-group">
							    <label for="">Organisation</label>
							    <input name="organisation" type="text" class="form-control" id="" placeholder="libelle">
						    </div>

						    <div class="form-group">
							    <label for="">Poste occupé</label>
							    <input name="poste" type="text" class="form-control" id="" placeholder="libelle">
						    </div>

						    <div class="form-group">
							    <label for="">Date debut</label>
							    <input name="date_debut" type="date" class="form-control" id="" placeholder="libelle">
						    </div>

						    <div class="form-group">
							    <label for="">Date fin</label>
							    <input name="date_fin" type="date" class="form-control" id="" placeholder="libelle">
						    </div>

						    <div class="form-group">
							    <label for="">Id_codeuses</label>
							    <select name="matricule" class="form-control">
					            <?php
                            //recupere toutes les categories dans la bd
					        $sqlrecup= "SELECT * FROM codeueses";
					        //execute la requete et on la stock dans $repcategorie
					        $repcod= mysqli_query($link,$sqlrecup);
					        //mysqli_fetch_array = permet de transformer le resultat $repcat en variable de type tableau $datacat
					        // la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
					         while ($datacod= mysqli_fetch_array($repcod)) {
						    ?>
						    <option value="<?php echo $datacod['id'];?>">
						        <?php echo $datacod['id'];?>
						    </option>
						    <?php
					        }
					        ?>			
					            </select><!-- /select categories -->
				            </div><!-- /div form-group categories -->
						    <br><br>
						    <button name="btnEnregistrer" type="submit" class="btn btn-primary btn-sm btn-block">Valider</button>
				        </form>
				    </div ><!-- /div col-md-8 -->
				    <div class="col-md-2"></div>
			    </div><!-- row -->
			</div><br><br><!--/div container-->
		    <br>
            <!-- tableau d'affichage-->
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>Numero</th>
							<th>Organisation</th>
							<th>Poste</th>
							<th>Date debut</th>
							<th>Date fin</th>
							<th>Id_codeuse</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT 
										titre,
										description,
										stock,
										image,
										categories.libelle,
										users.nom,
										resume
									FROM articles
									INNER JOIN categories, users
									ON categories.id = articles.id_categories and 
									   users.id= articles.id";
							        $res= mysqli_query($link,$list);
	                               while ($data = mysqli_fetch_array($res)){				
						?>
						<tr>
							<td><?php echo $n; ?></td>
							<td><?php echo $data['organisation']; ?></td>
							<td> <?php echo $data['poste']; ?></td>
							<td><?php echo $data['date_debut']; ?></td>
							<td><?php echo $data['date_fin']; ?></td>
							<td><?php echo $data['']; ?></td>
							<td></td>
						</tr>
						<?php $n++;
						 } ?>
					</tbody>
				</table>
				<br><br>
			</div>
		</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
</body>
</html>