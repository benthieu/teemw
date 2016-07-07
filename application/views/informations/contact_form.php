<!-- Cette page a été générée à l'aide du template "contact-form-amp"
SOURCE: http://www.prepbootstrap.com/bootstrap-template/contact-form-map -->
<!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
          <section class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
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

                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                          <div class="product-options">
                                            <a  id="send" href="javascript:;"  class="btn btn-primary" >Envoyer</a>
                                          </div>
                                            <br />
                                          <div class="alert alert-success" id="success-alert">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <p><strong>Message envoyé </strong></p>
                                            <p>Un collaborateur de TEEMW vous répondera dans les plus brefs délais.</p>
                                          </div>

                                  </div>
                                </div>
                                </fieldset>
                            </form>
                        </div>
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
            </div>



            <style>

                .header {
                    background-color: #F5F5F5;
                    color: #36A0FF;
                    height: 70px;
                    font-size: 27px;
                    padding: 10px;
                }

            </style>
  </section>
        </div>

        <script type="text/javascript">
        $(document).ready (function(){
                $("#success-alert").hide();
                $("#send").click(function showAlert() {
                    $("#success-alert").alert();
                    $("#success-alert").fadeTo(6000, 500).slideUp(500, function(){
                   $("#success-alert").alert('close');
                    });
                });
     });

        </script>


    </body>
    </html>
