<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>

	<link href="style/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">

    <script type="text/javascript" src="style/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="sidenav">
         <div class="login-main-text">
            <h2>Umeeti<br>Sign up</h2>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form2">
               <form>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Age</label>
                     <input type="age" class="form-control" placeholder="Age > 18">
                  </div>
                  <div class="form-group">
                     <label>Sexe</label>
                     <select type="sexe" class="form-control" id="pet-select">
                      <option value="">--Please choose an option--</option>
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                      <option value="NB">None binary</option>
                  </select>
                  </div>
                  <div class="form-group">
                     <label>Email adress</label>
                     <input type="mail" class="form-control" placeholder="Email adress">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="Cpassword" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-clr">Login</button>
                  <button type="submit" class="btn btn-clr">Register</button>
               </form>
            </div>
         </div>
      </div>
</body>
<?php 
require "footer.php"
?>
</html>