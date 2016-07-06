<div class="container">
  <section class="row">

    <dl class="dl-horizontal">
    <dt><div id="back_annonces"><a class="btn btn-warning" href="/teemw/index.php/Demand/"><span class="	glyphicon glyphicon-arrow-leftr"></span> Les annonces</a></div></dt>
    <dd><button type="button" class="btn btn-danger">Signaler l'annonce</button></dd>
    </dl>

</section>

<section class="row">

<dl class="dl-horizontal">
<h3>  <dt><span class="glyphicon glyphicon-road"></span></dt>
    <dd><?php echo $offer[0]->offer; ?></dd> </h3>
<h5>  <dt><span class="glyphicon glyphicon-map-marker"></span> Départ:</dt>
<dd><?php echo $offer[0]->start_street; ?>, <?php echo $offer[0]->start_zip_code; ?> <?php echo $offer[0]->start_place; ?></dd>
<dt><span class="glyphicon glyphicon-flag"></span> Arrivée:</dt>
<dd><?php echo $offer[0]->destination_street; ?>, <?php echo $offer[0]->destination_zip_code; ?> <?php echo $offer[0]->destination_place; ?></dd></h5>
</dl>
<dl class="dl-horizontal">
<h5><dt><span class="	glyphicon glyphicon-user"></span> Demandé par:</dt>
<dd><?php echo $offer[0]->user->last_name." ".$offer[0]->user->first_name; ?></dd></h5>
</dl>

<dl class="dl-horizontal">
<h5><dt><span class="	glyphicon glyphicon-piggy-bank"></span> Prix:</dt>
<dd>#Price<!--<?php echo $offer[0]->price; ?>--></dd></h5>
</dl>

<dl class="dl-horizontal">
<h5><dt>Type:</dt>
<dd><?php echo $offer[0]->offer_type; ?></dd>
<dt>Champs:</dt>
<dd><?php echo $offer[0]->fields; ?></dd>
</dl>

<dl class="dl-horizontal">
<h5><dt><span class="glyphicon glyphicon-comment"></span> Descriptions:</dt>
<dd><?php echo $offer[0]->description; ?></dd></h5>
</dl>
</section>
<section class="row">

<button type="button" class="btn btn-primary">Proposer un devis</button>
<button type="button" class="btn btn-info">Poser une question</button>
<button type="button" class="btn btn-info">Sauvegarder</button>

</section>
</div>
