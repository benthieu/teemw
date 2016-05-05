<!--register_form pour les transporteurs
work on progress
nts
-->

<?php
<?php echo form_open($this->uri->uri_string()); ?>
<div class="page-header">
	<h1>Enregistrement d'annonceur</h1>
</div>


<div class="container tabs-wrap">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#transporteur" aria-controls="transport" role="tab" data-toggle="tab" aria-expanded="true">Devenez transporteur</a>
    </li>
    <li>
      <a href="#specialite" aria-controls="spec" role="tab" data-toggle="tab" aria-expanded="false">Vos spécialités</a>
    </li>
    <li>
      <a href="#description" aria-controls="desc" role="tab" data-toggle="tab" aria-expanded="false">Description</a>
    </li>
		<li>
			<a href="#validation" aria-controls="valid" role="tab" data-toggle="tab" aria-expanded="false">Validation</a>
		</li>
  </ul>



<div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="transporteur">
    <h3 class="">Devenez transporteur</h3>
    <p>Trouvez des chargements proches de vous ou sur vos trajets réguliers, proposez vos offres et remportez de nouvelles courses !</p>
		<h4>Conditions pour devenir Transporteur</h4>
		<ol>
<li> Être une société de transport (kbis, licence de transporteur et assurance)</li>
<li> S'inscrire gratuitement </li>
</ol>
    <a class="btn btn-primary continue">Suivant</a>
  </div>

  <div role="tabpanel" class="tab-pane" id="specialite">
    <h3 class="">Vos spécialités</h3>
    <p>veuillez cocher (plusieurs choix possibles)</p>
		<h4>Vos trajets réguliers</h4>
		<h4>Vos régions favorites</h4>
    <a class="btn btn-primary back">Précédent</a>
    <a class="btn btn-primary continue">Suivant</a>
  </div>

  <div role="tabpanel" class="tab-pane" id="description">
    <h3 class="">Description</h3>
    <h4>Informations générales</h4>
		<h4>Décrivez votre entreprise en 2-3 lignes</h4>
    <a class="btn btn-primary back">Précédent</a>
    <a class="btn btn-primary continue">Suivant</a>
  </div>

	<div role="tabpanel" class="tab-pane" id="validation">
    <h3 class="">Review &amp; Place Order</h3>
    <p>Review &amp; Payment Tab</p>
    <a class="btn btn-primary back">Go Back</a>
    <a class="btn btn-primary continue">Place Order</a>
  </div>
</div></div>


        <div id="push"></div>

?>
