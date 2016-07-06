<div class="container">
  <section class="row">

    <table class="table table-hover">
       <thead>
         <tr>
           <th>Titre</th>
           <th>Départ</th>
           <th>Arrivée</th>
           <th>Demandeur</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
                       <?php for ($i = 0; $i < count($annoncelist); ++$i) { ?>
                          <tr>
                           <td><?php echo $annoncelist[$i]->offer; ?></td>
                          <td><?php echo $annoncelist[$i]->start_place; ?></td>
                            <td><?php echo $annoncelist[$i]->destination_place; ?></td>
                              <td><?php echo $annoncelist[$i]->user_id; ?></td>
                              <td>
                              <a href="<?php echo base_url() ?>/demand/get_offer/<?php echo $annoncelist[$i]->id; ?>">Afficher</a>
                          </td>
                        </tr>
                                             <?php } ?>
                                        </tbody>
     </table>
</section>


</div>
