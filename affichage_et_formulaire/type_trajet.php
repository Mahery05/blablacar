<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/blablacar/bdd/include/path.php';
?>

<!DOCTYPE html>
<html>

<?php 
	$head_title = 'OtterCovoit | Trajets Type'; 
	include $include_path . 'head.php'; 
?>

<body>
	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>

	<h1>Liste des trajets Type</h1>

	<?php include $include_path . 'trajet_typebar.php'; ?>

	<?php 
		if($trajets){
			while($trajet = $trajets->fetch()) {
				printTrajetType($trajet);
			}
		}
	?>
	
	<!-- Footer ! -->
	<?php include $include_path . 'footer.php'; ?>
</body>
</html>