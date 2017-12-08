<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>



 


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Higher Thoughts</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Higher Thoughts</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>   
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="secret.php">Our Tv Show</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="debates.php">Debates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Log out</a>
            </li>
          </ul>
            
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Welcome!  <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>,</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Learn More about our team.</p>
           
          </div>
        </div>
      </div>
    </header>

    

    <section class="bg-light text-black">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
      <div class="row">       
                <div class="col-sm-4" style="padding:10px;text-align:left;">
                    <img class="img-responsive" src="img/safi.jpg" width="350" height="350" alt="safi">
                    <h3>Safi Patel
                        <small>Team assistant</small>
                    </h3>
                    <p> Gandhi said that “whatever you do in life will be insignificant, but it's very important that you do it because nobody else will”.  I think to a certain extent Ghandi was right.  Were all doing things because we need to survive, pass time, and go through the motions in life. How many of us, want to make an impact on someone else life, hence our show, wants to aware you, help you make a difference to somebody else life.</p>
                </div>
                
                <div class="col-sm-4" style="padding:10px;">
                    <img class="img-responsive" src="img/justin.jpg" width="350" height="350" alt="Justin" >
                    <h3>Justin Beder
                        <small>Team assistant</small>
                    </h3>
                    <p> My whole life I’ve been thoroughly invested in the social justice of others. With a keen eye on creative media, it’s always been my dream to create a collaborative piece of media that incorporates debating in depth about social justice issues and eastern philosophy. Having been raised in London by two South African parents, I’ve been made aware of the differences in culture in a country such as ours and have been desensitised to the inequality that many members of society face. This has spurred my interest and motivated me to speak out about what can so easily be swept under the rug. Wake up England! </p>
                </div>
                
                <div class="col-sm-4" style="padding:10px;">
                    <img class="img-responsive" src="img/fb.jpg" width="350" height="350" alt="callum">
                    <h3>Callum Day
                        <small>Team assistant</small>
                    </h3>
                    <p> Me and the team are all Digital Media students at Coventry University and we are using this opportunity to spread awareness for everyone and get the best project yet for social issues today. The social issues that are addressed are relevant to everyone and we want to make sure everyone can get a new understanding of certain social issues as well as enjoy the show!</p>
            
                </div>
            </div>
                <div class="row">       
                <div class="col-sm-4" style="padding:10px;text-align:left;">
                    <img class="img-responsive" src="img/ellie.JPG" width="350" height="350" alt="ellie">
                    <h3>Ellie Kirkebride
                        <small>Team assistant</small>
                    </h3>
                    <p> I'm Ellie, I'm a 19-year-old Digital Media student studying at Coventry University in my second year. I am so pleased that we are addressing the social issues that are tackled in everyday life, the idea of having a debate show about it meant that we were able to review different views and opinions.</p>
                </div>
                
                <div class="col-sm-4" style="padding:10px;">
                    <img class="img-responsive" src="img/jimmy.jpg" width="350" height="350" alt="Jim">
                    <h3>Jimmy Sodiya
                        <small>Team Leader</small>
                    </h3>
                    <p> My whole life I’ve been thoroughly invested in the social justice of others. With a keen eye on creative media, it’s always been my dream to create a collaborative piece of media that incorporates debating in depth about social justice issues and eastern philosophy. Having been raised in London by two South African parents, I’ve been made aware of the differences in culture in a country such as ours and have been desensitised to the inequality that many members of society face. This has spurred my interest and motivated me to speak out about what can so easily be swept under the rug. Wake up England! </p>
                </div>
                
                <div class="col-sm-4" style="padding:10px;">
                    <img class="img-responsive" src="img/lucky.JPG"  width="350" height="350"alt="lucky">
                    <h3>Lucky
                        <small>Team assistant</small>
                    </h3>
                    <p> Lucky he has done literally fuck all, hardly turns up and when he does he caues stress and chaos</p>
            
                </div>
            </div>
      </div>
        </div>
        
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">If you want to join our team, or participate in any of our debates, get in touch</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>07704577876</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">patelm33@uni.coventry.ac.uk</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>


  
