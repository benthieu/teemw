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
                                  <td><?php echo $annoncelist[$i]->place; ?></td>
                                    <td><?php echo $annoncelist[$i]->destination; ?></td>
                                      <td><?php echo $annoncelist[$i]->user_id; ?></td>
                                      <td>
                                      <a href="<?php echo base_url() ?>/Annonce/index/<?php echo $annoncelist[$i]->id; ?>">Afficher</a>
                                  </td>
                                </tr>
                                                     <?php } ?>
                                                </tbody>

             </table>

        </section>


        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
