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
  <link id="bsdp-css" href="<?php echo base_url(); ?>addons/datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/default.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/default.js"></script>
  <script src="<?php echo base_url(); ?>addons/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>addons/datepicker/locales/bootstrap-datepicker.fr-CH.min.js" charset="UTF-8"></script>
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
        <a class="navbar-brand" href="<?php echo base_url(); ?>">TEEMW</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <?php
          $class = $this->router->fetch_class();
          $method = $this->router->fetch_method();
          ?>
          <li <?php if ($class == 'landing_page') {
            echo 'class="active"';
          }?>><a href="<?php echo base_url(); ?>"><?php echo lang('home') ?></a></li>

          <li class="dropdown <?php if ($class == 'Cgv'|| $class == 'Faq' || $class == 'Explication' || $class == 'Contact') {
            echo 'active';
          }?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo lang('useful_information') ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if ($class == 'Cgv') {
              echo 'class="active"';
            }?>><a href="<?php echo base_url(); ?>Cgv/"><?php echo lang('cgu') ?></a></li>
            <li <?php if ($class == 'Faq') {
              echo 'class="active"';
            }?>><a href="<?php echo base_url(); ?>Faq/"><?php echo lang('faq') ?></a></li>
            <li <?php if ($class == 'Explication') {
              echo 'class="active"';
            }?>><a href="<?php echo base_url(); ?>Explication/"><?php echo lang('explanation') ?></a></li>
            <li <?php if ($class == 'Contact') {
              echo 'class="active"';
            }?>><a href="<?php echo base_url(); ?>Contact/"><?php echo lang('contact_us') ?></a></li>
          </ul>
        </li>


        <?php
        if ($is_logged) {
          ?>
          <li <?php if ($class == 'demand' && $method == 'create_offer') {
            echo 'class="active"';
          }?>><a href="<?php echo base_url(); ?>demand/create_offer"><?php echo lang('ask_transport') ?></a></li>
          <li class="dropdown <?php if ($class == 'auth' && ($method == 'change_userdata')) {
            echo 'active';
          }?>">
          <li <?php if ($class == 'demand' && ($method == 'index' || $method == 'get_offer' || $method == 'edit_offer')) {
            echo 'class="active"';
          }?>><a href="<?php echo base_url(); ?>demand/index"><?php echo lang('ads') ?></a></li>
          <li class="dropdown <?php if (($class == 'auth' && ($method == 'change_userdata')) || ($class == 'demand' && $method == 'get_my_offers')) {
            echo 'active';
          }?>">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo lang('advertiser') ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if (($class == 'demand' && $method == 'get_my_offers')) {
              echo 'class="active"';
            }?>><a href="<?php echo base_url(); ?>demand/get_my_offers">Mes annonces</a></li>
            <li <?php if (($class == 'auth' && $method == 'change_userdata')) {
              echo 'class="active"';
            }?>><a href="<?php echo base_url(); ?>auth/change_userdata"><?php echo lang('modify') ?></a></li>
            <li><a href="<?php echo base_url(); ?>auth/logout"><?php echo lang('logout') ?></a></li>
          </ul>
        </li>
        <?php
      }
      else {
        ?>
        <li <?php if ($class == 'auth' && $method == 'login') {
          echo 'class="active"';
        }?>><a href="<?php echo base_url(); ?>auth/"><?php echo lang('login') ?></a></li>
        <li class="dropdown <?php if ($class == 'auth' && ($method == 'register' || $method == 'register_transp')) {
          echo 'active';
        }?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo lang('register') ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li <?php if ($class == 'auth' && $method == 'register') {
            echo 'class="active"';
          }?>><a href="<?php echo base_url(); ?>auth/register"><?php echo lang('advertiser') ?></a></li>
          <li <?php if ($class == 'auth' && $method == 'register_transp') {
            echo 'class="active"';
          }?>><a href="<?php echo base_url(); ?>auth/register_transp"><?php echo lang('transporter') ?></a></li>
        </ul>
      </li>
      <?php
    }
    ?>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li <?php if($this->session->userdata('site_lang') == 'french') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/french"><?php echo lang('french') ?></a></li>
        <li <?php if($this->session->userdata('site_lang') == 'english') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/english">English</a></li>
      </ul>
    </li>
  </ul>





  <?php
  if ($is_logged) {
    ?>
    <form class="navbar-form" method="POST" action="<?php echo base_url(); ?>demand/" role="search">
      <div class="input-group">
        <input type="text" class="form-control" value="<?php echo $_POST['filter_by_text']; ?>" placeholder="<?php echo lang('search_ads') ?>" name="filter_by_text">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
      </div>
    </form>
    <?php
  }
  ?>
</div><!--/.nav-collapse -->
</div>
</nav>

<div class="container theme-showcase" role="main" style="padding-top: 70px">
  <?php /* load page view */ $this->load->basic_view($content_view); ?>
</div>
</body>
</html>
