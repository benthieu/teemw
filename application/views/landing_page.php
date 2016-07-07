<link rel="stylesheet" href="bootstrap-social.css" type="text/css">

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="page-header"><h2><?php echo lang('landing_page') ?></h2>

</div>
<h3><p class="text-info">TRANSPORT</p>
<p class="text-success">ECOLOGIE</p>
<p class="text-danger">ECONOMIE</p>
<p class="text-warning">MARCHANDISE</p>
<p class="text-primary">WARE</p>
</h2>
<div class="container">

  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/truck-landscape.jpg" alt="truck-landscape" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/crossing-roads.jpg" alt="crossing-roads" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/hand-truck.jpg" alt="hand-truck" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
