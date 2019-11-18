<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- FIND A FLAVICON -->
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<!--     <link rel="stylesheet" type="text/css" href="style/style.css">
 -->
    <title>Umeeti</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="style/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/carousel.css" rel="stylesheet">
    <script type="text/javascript" src="anim/bcg.js"></script>


    <header>
      <nav class="navbar  navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Umeeti <span class="sr-only">(current)</span></a>
            </li>

            <!-- SI CONNECTER AVEC LE BAIL DE SESSION -->

            <li class="nav-item">
              <a class="nav-link" href="lookarround.php">Look arround</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="meetings">My meetings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="activies">My Activities</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
          </ul>
         <form class="form-inline mt-2 mt-md-0" action="MyProfil.php" method="POST">
            <button class="btn btn-outline-success my-2 my-sm-0" id="cercle" type="submit" value="<?php echo($variable); ?>">M</button>
          </form>
      </nav>
    </header>
  </head>