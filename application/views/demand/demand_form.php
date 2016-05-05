<style type="text/css">#D1, #D2, #D3, #D4 {display: none;}</style>
<script type="text/javascript">
function showRadio() {
	var n = document.form.btnr.length;
	for(i=1;i<=n;i++) {
		if(document.getElementById('choix'+i).checked == true) {
			document.getElementById('D'+i).style.display = "block";
		} else {
			document.getElementById('D'+i).style.display = "none";
		}
	}
  }
</script>
<p><b>Faites votre choix: </b></p>
<form name="form-inline" action="" method="post">
	<p>
		<label>Déménagement <input type="radio" id="choix1" name="btnr" value="dem" onclick="showRadio()" /></label>
		<label>Véhicules <input type="radio" id="choix2" name="btnr" value="veh" onclick="showRadio()" /></label>
		<label>Personnes <input type="radio" id="choix3" name="btnr" value="per" onclick="showRadio()"  /></label>
		<label>Objets divers <input type="radio" id="choix4" name="btnr" value="obj" onclick="showRadio()" /></label>
	</p>
  <div id="D1">
    <div class="form-group">
      <label for="exampleInputName2">Name</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail2">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
    </div>
    <button type="submit" class="btn btn-default">Send invitation</button>
  </div>
	<div id="D1">
    <div class="form-group">
      <label for="exampleInputName2">Name</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail2">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
    </div>
    <button type="submit" class="btn btn-default">Send invitation</button>
	</div>

	<div id="D2">
		<label>Prénom de l'amateur <input type="text" /></label> <label>Département de l'amateur <input type="text" /></label>
	</div>

	<div id="D3">
		<label>Nom de l'animalerie <input type="text" /></label> <label>Département de l'animalerie <input type="text" /></label>
	</div>

	<div id="D4">
		<label>Nom de l'association <input type="text" /></label> <label>Département de l'association <input type="text" /></label>
	</div>

</form>
</body>
</html>
