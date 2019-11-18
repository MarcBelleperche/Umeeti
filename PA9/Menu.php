<?php
 session_start();

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


			$reponse = $bdd->prepare('SELECT ReservationID FROM novotel WHERE ((DateReservationDebut BETWEEN ? AND ?) OR (DateReservationFin BETWEEN ? AND ?)) AND ReservationID != ?');
			$reponse->execute(array($tempoDebut,$tempoFin,$tempoDebut,$tempoFin,$tempoResa));

			while ($donneees = $reponse->fetch())
			{
				$resaID = $donneees['ReservationID'];
				echo $resaID." ";
			}

			$reponse->closeCursor();
		}

		?>
		<a href="Logout.php">Test page deconnection</a>
		<?php
	}
	
}

else
{
	header('Location: Index.php');
}


?>