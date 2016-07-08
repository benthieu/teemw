<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }

</style>
<div class="row">
    <div class="col-md-6">
          <form class="form-horizontal" method="post">
            <input type="hidden" name="contact_form" value="true" />
              <fieldset>
                  <legend class="text-center header">Nous contacter</legend>
                  <div class="form-group">
                      <div class="col-md-10 col-md-offset-1">
                          <input id="fname" name="prenom" type="text" placeholder="Prénom" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-10 col-md-offset-1">
                          <input id="lname" name="nom" type="text" placeholder="Nom" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-10 col-md-offset-1">
                          <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-10 col-md-offset-1">
                          <input id="phone" name="tel" type="text" placeholder="Numéro de téléphone" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-10 col-md-offset-1">
                          <textarea class="form-control" id="message" name="message" placeholder="Veuillez entrer votre message" rows="7"></textarea>
                      </div>
                  </div>

                  <span style="color: green;"><?php
                    echo $this->session->flashdata('MSG');
                  ?></span>
                  <input type="submit" class="btn btn-primary" name="submit" value="Envoyer"/>
              </fieldset>
          </form>
    </div>
    <div class="col-md-6">
        <div>
            <div class="panel panel-default">
                <div class="text-center header">Nous retrouver</div>
                <div class="panel-body text-center">
                    <h4>Adresse</h4>
                    <div>
                    <strong>TEEMW</strong><br />
                    Route de la plaine 2<br />
                    Case postale 80<br />
                    3960 Sierre<br />
                    </div>
                    <br />
                    <h4>Contacts</h4>
                    <div>
                    general@teemw.ch<br />
                    021 428 65 45<br />
                    </div>
                    <div>
                      <br />
                  <h4>Réseaux sociaux</h4>
                  <button style="font-size:24px"><i class="fa fa-facebook-official"></i></button>
                  <button style="font-size:24px"><i class="fa fa-google-plus-square"></i></button>
                  <button style="font-size:24px"><i class="fa fa-twitter-square"></i></button>
                  <button style="font-size:24px"><i class="fa fa-youtube-square"></i></button>
                  <button style="font-size:24px"><i class="fa fa-linkedin-square"></i></button>
                  </div>
                    <hr />
                </div>
            </div>
        </div>
    </div>
</div>
