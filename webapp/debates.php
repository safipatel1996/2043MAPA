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
              <strong>Welcome  <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>,</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">What keeps you up at night? Have you ever questioned your existance?Are you the only one, with unanswered questions? Well join us in our debate show, where others like you will be debating societies issues.</p>
          </div>
        </div>
      </div>
    </header>

    

     <section id="Debates">
  <div class="jumbotron">
        <h1 align="center">Our Debate</h1> 
          <p class="Our-Product">Over the past couple of weeks, the production team have designed a viable and more interactive method of voicing our opinions. Our tv show, covers the following debates on the show, we aim to do an episode once a week, a live intellectual talk between people in our community.</p>
      </div>
        
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Knife Crime
                    </h2>
                <p>Knife crime is on the ride over the last decade. With it risen by 10% across England and wales. More people are feeling the need to carry knives as a form of protection. However there, is a correlation between knife crime and a rise in violent crime, and murder rates of over 18%. With knife crime on the rise, we want to know your thoughts on ideas, on why people might carry knives, and do you think in our day of age we may need to carry knives as a form of defence.</p>
                <div class="row">
            <div class="col-md-12">
                <img class="img-center" width="80%" height="365" src="img/knife-933312_640.jpg" alt="Knife">
            </div>
                <hr>
    </div>
                    <hr>
                </div>
      
        </div>
        <div class="jumbotron">
        <h1 align="center">Fair Use</h1> 
          <p class="Fair Use">Fair use 
Fair use, is the use of copyrighted material done for “transformative purposes, that can be used to critique, or for parody purposes.
When using copyrighted material, one must ask the following: has the material you have taken from the original work been transformed by adding new expression or meaning? Was value added to the original by creating new information, new aesthetics, new insights, and understandings?
Why the topic has become ever so hot, is through the existence of YouTube. YouTube is a videoing app, and many people use it, to platform their videos.  In their videos, they may use existent art work or background music that is owned by existing artist. This work could not be copyrighted or stolen without the user’s authority. 
</p>
  <div class="row">
            <div class="col-md-12">
                <img class="img-center" width="50%" height="365" src="img/copyright-40632_640.png" alt="copyright">
            </div>
                <hr>
    </div>
            
      </div>
<div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Feminism 

                    </h2>
                <p>We want to know your thoughts! Do you think feminism is alive and well in this society?
Do you believe that feminism is a big issue that females still have to deal with in 2017 or are you the opposite and view feminism as something that is pro-actively making a difference today? 
With our debate today this is the perfect opportunity to get your views across and with the results we would be able to understand the opinions of our youths today. </p>
                <div class="row">
            <div class="col-md-12">
                <img class="img-center" width="50%" height="365" src="img/emancipation-156066_640.png" alt="3dmodel">
            </div>
                <hr>
    </div>
                    <hr>
                </div>
      
        </div>
        
<div class="jumbotron">
        <h1 align="center">Peace and War</h1> 
          <p class="Peace">
Does peace truly exist?
People are always fighting, with wars around the world seeming to pop up every now and then. Wars between borders, politics, religion and gender equality. We need to find a way in which we can build peace, resolve conflicts and be able to find justice and human rights. We will look at both sides of the argument and then choose to agree and disagree.

</p>
  <div class="row">
               <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="img/safi1.mp4"></iframe>
  </div>
                <hr>
    </div>
            
      </div>
        
<div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">LGBT </h2>
                    <p>The LGBT community is still a taboo subject in today’s society.</p>
<p>Agree
The general public today feel uncomfortable talking about the subject as they will often have no experience in speaking openly about such matters. As a result of this the topic is not getting enough movement. In America it seemed like they were moving forward with the LGBT community as Barack Obama legalized gay marriage however now Trump is in office and his views are very different. Society has closed its mind to things that it doesn’t understand but with time, society’s views will change and the LGBTQ+ society will be more widely accepted. </p>
<p>Disagree
There are countless opportunities in society for people to speak about LGBTQ+ and many do. With large news outlets covering LGBTQ+ related issues and governments across the world decriminalising gay marriage, the work of the LGBTQ+ community has clearly impacted the way that society sees them. If there is a taboo, it’s on a time limit.
Get Involved
LGBT is a hot topic at this moment in time and we want you to get involved. We hope you have been following our debate and want to share your opinion with us. If you want to engage with us in this debate, it’s easy all you need to do is tap Agree or Disagree at the bottom of your screen. </p>
                <div class="row">
            <div class="col-md-12">
                <img class="img-center" width="50%" height="365" src="img/lgbt-1792757_640.jpg" alt="lgbt">
            </div>
                <hr>
    </div>
                    <hr>
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


  
