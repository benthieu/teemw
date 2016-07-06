<div class="container">
  <section class="row">

<div id="back_annonces"><a class="btn btn-warning" href="/teemw/index.php/annonces/">Revenir aux annonces</a></div>
<button type="button" class="btn btn-danger">Signaler l'annonce</button>
</section>

<section class="row">

<dl class="dl-horizontal">
<h3>  <dt><span class="glyphicon glyphicon-road"></span></dt>
    <dd><?php echo $annonce[0]->offer; ?></dd> </h3>
<h5>  <dt><span class="glyphicon glyphicon-map-marker"></span> Départ:</dt>
<dd><?php echo $annonce[0]->start_street; ?>, <?php echo $annonce[0]->start_zip_code; ?> <?php echo $annonce[0]->start_place; ?></dd>
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
