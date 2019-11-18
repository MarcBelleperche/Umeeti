<?php 
	session_start();

	if (!isset($_SESSION['Log'])) 
	{
		header('Location: Index.php');
	}

	include('BddConfig.php');
	$tempoID = $_SESSION['UserIDs'];
	$requ = $bdd->prepare('SELECT UserReservationID FROM user WHERE UserID = ?');
	$requ->execute(array($tempoID));
	$resu = $requ->fetch();
	$requ->closeCursor();

	if($resu['UserReservationID'] == 0)
	{
		if (isset($_POST['Resa']))
		{

			$tempoResa=$_POST['Resa'];

			$req = $bdd->prepare('SELECT * FROM novotel WHERE ReservationID = ?');
			$req->execute(array($tempoResa));
			$resultat = $req->fetch();
			$req->closeCursor();

			if(!$resultat)
			{
				$_SESSION['ReservationFail'] = 1; 
			}
			else
			{
				$tempo_user = $_SESSION['UserIDs'];
				$tempo = $resultat['ReservationID'];

				$requete = $bdd->prepare('UPDATE user SET UserReservationID = ? WHERE UserID = ?'); // Insertion des données dans la bdd
				$requete->execute(array($tempo,$tempo_user));
				$requete->closeCursor();

				$_SESSION['AccesMenu'] = 1;
				header('Location: Menu.php');
			} 
		}	
	}
	else
	{
		$_SESSION['AccesMenu'] = 1;
		header('Location: Menu.php');
	}	



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Style/styleLog.css">
	<title>Reservation Page</title>
</head>

<body>
	<div class="container-fluid">
	  <div class="row no-gutter">
	    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
	    <div class="col-md-8 col-lg-6">
	      <div class="login d-flex align-items-center py-5">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-9 col-lg-8 mx-auto">
	              <h3 class="login-heading mb-4">Entrez votre numéro de réservation</h3>
	              <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	                <div class="form-label-group">
	                  <input type="text" id="wow" name="Resa" class="form-control" placeholder="Reservation" required autofocus>
	                  <label for="wow">Numéro de reservation</label>
	                </div>

	                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Envoyez</button>

	              </form>
	              <?php
	              if (isset($_SESSION['ReservationFail']))
	              {
		           ?> <br><br><div class="alert alert-danger text-center" role="alert">Numéro de reservation incorrect.</div> <?php
	              }
	              ?>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>
