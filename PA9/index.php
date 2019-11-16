<!DOCTYPE html>
<html lang="en">
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
  </head>
  <body>

    <header>
      <nav class="navbar  navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Umeeti <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Subscribe">Subscribe</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
          </ul>
<!--           <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
<!--           <li data-target="#myCarousel" data-slide-to="2"></li>
 -->        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Umeeti nous relie tous.</h1>
                <p>Comment faire de nouvels rencontres ? Umeeti vous propose de rencontrer des personnes locales à votre lieu de séjour vacancier.</p>
                <p><a class="btn btn-lg btn-clr" href="#Discover" role="button">Nous découvrir</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Umeeti get us all together.</h1>
                <p>This web site allows you to meet other people of a same hostel depending on their language, origins, ...</p>
                <p><a class="btn btn-lg btn-clr" href="#Discover" role="button">Discover us</a></p>
              </div>
            </div>
          </div>
<!--           <div class="carousel-item">
 --><!--             <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div> -->
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing" id="Discover">

        <!-- Three columns of text below the carousel -->



        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">What is Umeeti ? <span class="text-muted text-colored">The new way to meet people of a same place.</span></h2>
            <p class="lead">Umeeti is a responsive <strong>web platforme</strong> that has been designed to make people closer depending on their preferences.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="umeet.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider" id="Subscribe">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">How does it work ? <span class="text-muted text-colored">Become a user</span></h2>
            <p class="lead">You simply have to create your account with the hotel name, and your name. Get in touch with all the other person of the hostel and discorver all his activities.</p>
            <p><a class="btn btn-lg btn-clr" href="#Discover" role="button">Subscribe</a></p>

          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider" id="login">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Simply log on <span class="text-muted text-colored">and start to get in touch.</span></h2>
            <p class="lead">If you already have an account you only have to log in with your name andd password. All the data of the website are crypted.</p>
            <form action="login.php" method="POST">
            <p><button class="btn btn-lg btn-clr" href="" type="submit">Login</button></p>
            </form>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="style/Bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
