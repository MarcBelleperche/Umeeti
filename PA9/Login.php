<?php 
	session_start();

	if (isset($_SESSION['Log'])) 
	{
		header('Location: Index.php'); // Si l'utilisateur est déjà connecté, on le renvoie vers la page principale.
	}
			   
	if(isset($_POST['Login']) && isset($_POST['Password']))
	{
		include('BddConfig.php');

		$tempoLog=$_POST['Login'];
		$tempoPass=$_POST['Password'];
			
		$req = $bdd->prepare('SELECT * FROM user WHERE Email = ?');
		$req->execute(array($tempoLog));
		$resultat = $req->fetch();
		$req->closeCursor();

		if(!$resultat)
		{
			$_SESSION['LoginFail'] = 1; // Login invalide
		}
		else
		{
			if ($tempoPass == $resultat['LoginPassword']) 
			{
			    $_SESSION['Log'] = $_POST['Login'];
			    $_SESSION['UserNom'] = $resultat['Nom'];
			    $_SESSION['UserPrenom'] = $resultat['Prenom'];
			    $_SESSION['UserIDs'] = $resultat['UserID'];
			    $_SESSION['VerifResa'] = $resultat['UserReservationID'];
			    
			    if($_SESSION['VerifResa'] == 0)
			    {
			    	header('Location: Reservation.php');
			    }
			    else
			    {
			    	$_SESSION['AccesMenu'] = 1;
			    	header('Location: Menu.php');
			    }
			    
			}
			else
			{
			    $_SESSION['LoginFail'] = 1; // Login valide mais mdp invalide
			}
		} 	
	}	
?>

<!DOCTYPE html>
<html>

<head>
	<title>login</title>

	<link href="style/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">

    <script type="text/javascript" src="style/Bootstrap/js/bootstrap.min.js"></script>
</head>
<?php 
require "header.php"
?>
<body>
	<div class="sidenav">
         <div class="login-main-text">
            <h2>Umeeti<br>Login</h2>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="Login" required autofocus>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="Password" required>
                  </div>
                  <button type="submit" class="btn btn-clr">Login</button>
               </form>
            </div>
         </div>
      </div>
</body>

<?php 
require "footer.php"
?>
</html>