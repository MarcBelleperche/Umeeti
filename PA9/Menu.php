<?php
 session_start();


if(!isset($_SESSION['Log']) &&! isset($_SESSION['AccesMenu']))
{
	header('Location: Index.php');
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Menu</title>
	<link href="style/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <script type="text/javascript" src="style/Bootstrap/js/bootstrap.min.js"></script>
</head>

<?php 
require "header.php"
?>

<body>
	<br><br>
	<?php
	if (isset($_SESSION['Log']) && isset($_SESSION['AccesMenu']))
	{
		if ($_SESSION['AccesMenu'] == 1)
		{
			include('BddConfig.php');

			if(isset($_SESSION['VerifResa']))
			{
				$tempoResa = $_SESSION['VerifResa'];
				$req = $bdd->prepare('SELECT DateReservationDebut, DateReservationFin FROM novotel WHERE ReservationID = ?');
				$req->execute(array($tempoResa));
				$resultat = $req->fetch();
				$req->closeCursor();

				$tempoDebut = $resultat['DateReservationDebut'];
				$tempoFin = $resultat['DateReservationFin'];


				$reponse = $bdd->prepare('SELECT user.* , novotel.DateReservationDebut, novotel.DateReservationFin FROM user INNER JOIN novotel ON user.UserReservationID = novotel.ReservationID WHERE ((DateReservationDebut BETWEEN ? AND ?) OR (DateReservationFin BETWEEN ? AND ?)) AND ReservationID != ?'); // Natural Join -> permet d'afficher uniquement les clients de l'hôtel ayant crée un compte umeeti
				$reponse->execute(array($tempoDebut,$tempoFin,$tempoDebut,$tempoFin,$tempoResa));

				while ($donneees = $reponse->fetch())
				{
					$date_debut = $donneees['DateReservationDebut'];
					$date_fin = $donneees['DateReservationFin'];
					$nom = $donneees['Nom'];
					$prenom = $donneees['Prenom'];
					$sexe = $donneees['Sexe'];
					$description = $donneees['Description'];
					$img = $donneees['Photo'];
					echo $sexe.". ".$prenom." ".$nom.".<br>Date de séjour : [".$date_debut." --> ".$date_fin."]<br>Bio : ".$description."<br>";
					?>
					<img src="<?=$img?>">
					<?php
					echo "<br><br>";
				}

				$reponse->closeCursor();
			}
		}
		
	}
	?>

	<a href="Logout.php">Test page deconnection</a>

</body>

<?php 
//require "footer.php"
?>

</html>