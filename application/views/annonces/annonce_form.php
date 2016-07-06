<!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
          <section class="row">

      <div id="back_annonces"><a class="btn btn-warning" href="/teemw/index.php/annonces/">Revenir aux annonces</a></div>

    <button type="button" class="btn btn-danger">Signaler l'annonce</button>
        </section>

        <section class="row">

  <dl class="dl-horizontal">
  <h3>  <dt><span class="glyphicon glyphicon-road"></span></dt>
            <dd>#Titre de l'annonce<!--<?php echo $annoncelist[0]->offer; ?>--></dd> </h3>
  <h5>  <dt><span class="glyphicon glyphicon-map-marker"></span> Départ:</dt>
      <dd>#LieuDeDépart<!--<?php echo $annoncelist[0]->place; ?>--></dd>
    <dt><span class="glyphicon glyphicon-flag"></span> Arrivée:</dt>
      <dd>#LieuDArrivee<!--<?php echo $annoncelist[0]->destination; ?>--></dd></h5>
</dl>
<dl class="dl-horizontal">
<h5><dt><span class="	glyphicon glyphicon-user"></span> Demandé par:</dt>
    <dd>#UserName<!--<?php echo $annoncelist[0]->user_id; ?>--></dd></h5>
</dl>

<dl class="dl-horizontal">
<h5><dt><span class="	glyphicon glyphicon-piggy-bank"></span> Prix:</dt>
    <dd>#Price<!--<?php echo $annoncelist[0]->price; ?>--></dd></h5>
</dl>

<dl class="dl-horizontal">
<h5><dt>Type:</dt>
    <dd>#Type<!--<?php echo $annoncelist[0]->type; ?>--></dd>
<dt>Poids:</dt>
    <dd>#Weight<!--<?php echo $annoncelist[0]->weight; ?>--></dd>
<dt>Volume:</dt>
    <dd>#Volume<!--<?php echo $annoncelist[0]->volume; ?>--></dd></h5>
</dl>

<dl class="dl-horizontal">
<h5><dt><span class="glyphicon glyphicon-comment"></span> Informations:</dt>
    <dd>#add_info<!--<?php echo $annoncelist[0]->add_info; ?>--></dd></h5>
</dl>
  </section>
    <section class="row">

<button type="button" class="btn btn-primary">Proposer un devis</button>
<button type="button" class="btn btn-info">Poser une question</button>
<button type="button" class="btn btn-info">Sauvegarder</button>
  </section>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
