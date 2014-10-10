<?php
require('../inc/credits.class.php');
$credits = new Credits();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Laughmaster's Warez</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=".">Laughmaster's Warez</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="navbar-text">You have <span class="label label-success"><?php echo $credits->getCount(); ?></span> credits</li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Sup n00bs</h1>
        <p>
          It's your lucky day, I have a bunch of stuff that freshmen like you probably need and I don't.
          I'm trying to get rid of this crap, so I'm giving everyone 100 credits to play with. Knock yourselves out.
        </p>
        <h3 class="pull-right"><i>&mdash;Laughmaster</i></h3>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Virus</h2>
          <p>Buying this may or may not install a virus on your computer. Purchase at your own risk.</p>
          <p>
            <h3>
              Price: 1 Credit
              <a class="btn btn-primary pull-right" href="buy.php?item=virus" role="button">Purchase</a>
            </h3>
          </p>
        </div>
        <div class="col-md-4">
          <h2>Toaster oven</h2>
          <p>It's a toaster oven. It makes delicious cookies. What more could you ask for?</p>
          <p>
            <h3>
              Price: 20 Credits
              <a class="btn btn-primary pull-right" href="buy.php?item=toaster" role="button">Purchase</a>
            </h3>
          </p>
        </div>
        <div class="col-md-4">
          <h2>Flag</h2>
          <p>A flag for l33t h4xx0rz. Good luck trying to get me to sell it to you.</p>
          <p>
            <h3>
              Price: 9001 Credits
              <a class="btn btn-primary pull-right" href="buy.php?item=flag" role="button">Purchase</a>
            </h3>
          </p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2014 <i>Brian McSweeney &amp; The 49th Security Division</i></p>
      </footer>
    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    </body>
</html>
