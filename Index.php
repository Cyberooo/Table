<!DOCTYPE html>
<html lang="fr">
<head>
	<title>TP 8</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<div class="en-tete">
				<h1>Table de multiplication et d'addition</h1>
		</div>
	</header>

	<nav class="container-fluid couleur">
			<div class="row">
				<div class="milieu">
					<?php
					for ($i=1; $i < 10; $i++) { ?>
						<a href="tp8_page1.php?valeur=<?php echo "$i"; ?><?php if(isset($_GET['operation'])) {?>&operation=<?php echo($_GET['operation']); }?>" class="btn btn-success <?php if($_GET['valeur'] == $i) {echo("active btn-lg");} ?>"><strong><?php echo "$i"; ?></strong></a>
					<?php
					}
					?>
				</div>
			</div>
			<div class="row">
				<div class="milieu">
					<a href="tp8_page1.php?<?php if(isset($_GET['valeur'])) {?>valeur=<?php echo($_GET['valeur']); echo("&"); }?>operation=p" class="btn btn-danger <?php if($_GET['operation'] == p) {echo("active btn-lg");} ?>"><strong>+</strong></a>
					<a href="tp8_page1.php?<?php if(isset($_GET['valeur'])) {?>valeur=<?php echo($_GET['valeur']); echo("&"); }?>operation=f" class="btn btn-danger <?php if($_GET['operation'] == f) {echo("active btn-lg");} ?>"><strong>x</strong></a>
				</div>
			</div>
		
	</nav>

	<?php 
	if (isset($_GET['valeur']) AND isset($_GET['operation'])) { ?>

		<?php
			if ($_GET['operation'] == "p") {
				$operation = "+";
			}
			else if ($_GET['operation'] == "f") {
				$operation = "x";
			}
		?>

		<div class="tables">
			<div class="container-sm tableau-couleur taille">
				<table class="table table-hover tableau-couleur">
					 <caption>Table des <?php echo($_GET['valeur']); ?></caption>
				    <?php
					for ($i=1; $i < 11; $i++) { ?>

						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo($operation); ?></td>
							<td><?php echo($_GET['valeur']); ?></td>
							<td>=</td>
							<td><?php
								$resultat = $_GET['valeur'] * $i;
								if ($operation == "+") {
									$resultat = $_GET['valeur'] + $i;
								}
								 echo($resultat); 
						?></td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	<?php 
	} ?>

	<footer class="fixed-bottom pt-4 footer-couleur">
  		<div class="footer-copyright text-center">
  			<p>Site réalisé par Julien ERHARD S1 C1</p>
    		<p>© 2020 Copyright</p>
  		</div>
	</footer>
</body>
</html>