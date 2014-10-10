<?php
require('../inc/credits.class.php');
$credits = new Credits();

if (!isset($_GET['item'])) {
    $header = "Seriously?";
    $body = "Stop trying to screw with my site.";
} else {
    switch($_GET['item']) {
        case 'virus':
            $cost = $credits->getCount();
            $header = "Why would you do that?";
            $body = "Oops, it looks like something went wrong. Maybe you have a virus?</p>".
                    "<p><em>Hint: You can reset your credits by restarting your browser</em>";
            break;
        case 'toaster':
            $cost = 20;
            $header = "Cool story bro";
            $body = "You got a toaster oven! Seriously, this thing makes the best cookies. You should try it out sometime.";
            break;
        case 'flag':
            $cost = 9001;
            $header = "Congratulations!";
            $body = 'Your flag for completing this chalenge is <span class="label label-success">c1f40496a39548c9afa56e952bf6063b</span>';
            break;
    }
    if (!$credits->pay($cost)) {
        $header = "Insufficient funds";
        $body = "You don't have enough credits to pay for that!";
    }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
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
            <li class="navbar-text">You have <span class="label label-success"><?php echo $credits->getCount() - $cost; ?></span> credits</li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="jumbotron">
      <h1><?php echo $header; ?></h1>
      <p><?php echo $body; ?></p>
      <h3>
          You have <?php echo $credits->getCount() - $cost; ?> remaining credits.
          <a class="btn btn-primary" role="button" href=".">Go Back</a></p>
      </h3>
  </div>
    <div class="container">

      <hr>

      <footer>
        <p>&copy; <i>btmcsweeney &amp; The 49th Security Division</i> 2014</p>
      </footer>
    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
