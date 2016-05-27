<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TEEMW</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/default.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/default.js"></script>
	</head>
    <body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TEEMW</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php
            $class = $this->router->fetch_class();
            ?>
              <li <?php if ($class == 'landing_page') {
                echo 'class="active"';
              }?>><a href="/teemw/index.php">Home</a></li>
            <?php
            if ($is_logged) {
            ?>
              <li <?php if ($class == 'demand') {
                echo 'class="active"';
              }?>><a href="/teemw/index.php/demand/">Make a demand</a></li>
              <li class="dropdown <?php if ($class == 'auth' && ($method == 'change_userdata')) {
                echo 'active';
              }?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;User <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?php if ($class == 'auth' && $method == 'change_userdata') {
                    echo 'class="active"';
                  }?>><a href="/teemw/index.php/auth/change_userdata">Modify</a></li>
                    <li><a href="/teemw/index.php/auth/logout">Logout</a></li>
                </ul>
              </li>



            <?php
            }
            else {
            ?>
              <li <?php if ($class == 'auth' && $method == 'login') {
                echo 'class="active"';
              }?>><a href="/teemw/index.php/auth/">Login</a></li>
              <li class="dropdown <?php if ($class == 'auth' && ($method == 'register' || $method == 'register_transp')) {
                echo 'active';
              }?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?php if ($class == 'auth' && $method == 'register') {
                    echo 'class="active"';
                  }?>><a href="/teemw/index.php/auth/register">User</a></li>
                  <li <?php if ($class == 'auth' && $method == 'register_transp') {
                    echo 'class="active"';
                  }?>><a href="/teemw/index.php/auth/register_transp">Transport</a></li>
                </ul>
              </li>
            <?php
            }
            ?>
          </ul>
          <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher une annonce" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main" style="padding-top: 70px">
      <?php /* load page view */ $this->load->basic_view($content_view); ?>
    </div>
  </body>
</html>
