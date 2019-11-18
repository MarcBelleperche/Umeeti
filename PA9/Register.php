<?php 
	session_start();

	if (isset($_SESSION['Log'])) 
	{
		header('Location: Index.php');  // Si l'utilisateur est déjà connecté, on le renvoie vers la page principale.
	}
		
	if (isset($_POST['Password']) && isset($_POST['VerifPassword']))
	{
		if ($_POST['Password'] == $_POST['VerifPassword']) // Mdp = Confirmez votre mot de passe
		{
    		$password = $_POST['Password'];

    		if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])#', $password) && strlen($password)>5) // Le mdp repond aux conditions
    		{
				if(isset($_POST['nom']) & isset($_POST['prenom']) & isset($_POST['Login']) & isset($_POST['sexe']))
				{
					include('BddConfig.php');

					$tempoverif = $_POST['Login'];

					$requete = $bdd->prepare('SELECT COUNT(Email) AS nbsame FROM user WHERE Email = ?');
					$requete->execute(array($tempoverif));
					$donnees = $requete->fetch();
					$requete->closeCursor();

					if($donnees['nbsame'] == 0) // Verifie si l'adresse email entrée est déjà utilisée ou pas
					{
						$req = $bdd->prepare('INSERT INTO user(Sexe,Nom,Prenom,Email,LoginPassword,UserReservationID) VALUES(?,?, ?, ?, ?,0)'); // Insertion des données dans la bdd
						$req->execute(array($_POST['sexe'],$_POST['nom'],$_POST['prenom'],$_POST['Login'],$_POST['Password']));
						$req->closeCursor();
						$_SESSION['Succes'] = 1;
					}
					else
					{
						$_SESSION['LoginNonDispo'] = 1; // Email déjà utilisé

					}
				}
			}
    		else 
    		{
        		$_SESSION['mdpNonConforme'] = 1; // Mdp non conforme
			}
		}
		else 
		{
			$_SESSION['mdpDifferent'] = 1; // Mdp != Confirmez votre mot de passe
		}
	}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Sign up</title>

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
            <h2>Umeeti<br>Sign up</h2>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form2">
               <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
               		<div class="form-group">
                     <label>Sexe</label>
                     <select type="sexe" class="form-control" name="sexe" required>
                       <option disabled selected value>-- Select sex --</option>
                       <option value="F">Female</option>
                       <option value="M">Male</option>
                	 </select>
                	</div> 
                  <div class="form-group">
                     <label>First Name</label>
                     <input type="text" class="form-control" placeholder="First Name" name="prenom" required autofocus>
                  </div>
                  <div class="form-group">
                     <label>Last Name</label>
                     <input type="text" class="form-control" placeholder="Last Name" name="nom" required>
                  </div>                  
<!--                   <div class="form-group">
                     <label>Age</label>
                     <input type="age" class="form-control" placeholder="Age > 18">
                  </div>
-->                  
                  <div class="form-group">
                     <label>Email adress</label>
                     <input type="mail" class="form-control" placeholder="Email adress" name="Login" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="Password" required>
                  </div>
                  <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="VerifPassword" required>
                  </div>
                  <button type="submit" class="btn btn-clr">Register</button>
               </form>
            </div>
         </div>
      </div>
</body>
<?php 
require "footer.php"
?>
