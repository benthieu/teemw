<div id="header">
  <?php echo ($info); ?>
  <h1 style="text-align: center; text-decoration: underline;"><br />Choisissez votre type de transport</h1>

  <script>

  $(document).ready(function(){
    $('#next').click(function(e){
        console.log($('input[name=transport]:checked').val());
        document.getElementById("formMove").style.display = "block";
    });
  });
</script>
<form name="typeOfTransport" method="post" >
  <input type="radio" name="transport" value="move" /> <label for="transport">Déménagement</label>
  <input type="radio" name="transport" value="vehicle" /> <label for="transport">Véhicule</label>
  <input type="radio" name="transport" value="person" /> <label for="transport">Personnes</label>
  <input type="radio" name="transport" value="objects" /> <label for="transport">Objets divers</label>
</form>
<button id="next"> Suivant </button>

  <table id="formMove" class="tableInscription">
    <form id="frmInscr" action="" method="post">
      <tr>
        <td>
          <label for="email">Email:</label>
        </td>
        <td>
          <input class="input" type="text" name="email" id="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" />
        </td>
      </tr>

      <tr>
        <td>
          <label for="prenom">Pr&eacute;nom:</label>
        </td>
        <td>
          <input class="input" type="text" name="prenom" id="prenom" value="<?php if(isset($_POST["prenom"])) echo $_POST["prenom"]; ?>"/>
        </td>
      </tr>

      <tr>
        <td>
          <label for="nom">Nom:</label>
        </td>
        <td>
          <input class="input" type="text" name="nom" id="nom" value="<?php if(isset($_POST["nom"])) echo $_POST["nom"]; ?>"/>
        </td>
      </tr>

      <tr>
        <td>
          <label for="mdp">Mot de passe:</label>
        </td>
        <td>
          <input class="input" type="password" name="mdp" id="mdp" />
        </td>
      </tr>

      <tr>
        <td>
          <label for="confirm">Confirmer:</label>
        </td>
        <td>
          <input class="input" type="password" name="confirm" id="confirm" />
        </td>
      </tr>
      <tr>
        <td><br />  </td>
      </tr>
      <tr>
        <td>
          <br />
        </td>
      </tr>
      <tr>
        <td>
          <input style="border-radius: 4px;" class="input" type="submit" name="btInscr" id="btInscr" value="Inscription" />
        </td>
      </tr>
    </form>
  </table>
</div>
<div style="min-height: 140px;" id="content">

</div>
