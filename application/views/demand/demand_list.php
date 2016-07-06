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
                       <?php for ($i = 0; $i < count($offer_list); ++$i) { ?>
                          <tr>
                           <td><?php echo $offer_list[$i]->offer; ?></td>
                          <td><?php echo $offer_list[$i]->start_place; ?></td>
                            <td><?php echo $offer_list[$i]->destination_place; ?></td>
                              <td><?php echo $offer_list[$i]->user->last_name." ".$offer_list[$i]->user->first_name; ?></td>
                              <td>
                              <a href="<?php echo base_url() ?>/demand/get_offer/<?php echo $offer_list[$i]->id; ?>">Afficher</a>
                          </td>
                        </tr>
                                             <?php } ?>
                                        </tbody>
     </table>
</section>


</div>
