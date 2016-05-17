<div class="container cgeneral">
	<div class="row">
		<h1>Tag 1</h1>
		<hr>
	 </div>
	 <!--Partie TAG1 -->
	 <?php
    include './param_tag1.php';
    ?>

     
     <!--Partie TAG2 -->
    <div class="row">
		<h1 >Tag 2</h1>
		<hr>
	 </div>
	<?php
    include './param_tag2.php';
    ?>
          
    <div class="row">
		<h1>Cathégorie</h1>
		<hr>
	 </div>
	<div class="row">
          <div class="col-lg-6">
          	<h2>Création </h2>
		        <form role="form" action="bureau.php" method="post">
		        <div class="form-group">
		          <label for="email">Libelle</label>
		          <input type="text" class="form-control" id="email" name="login" placeholder="Saisir le login">
		        </div>
		        <button type="submit" class="btn btn-default">Créer</button>
		      </form>
          </div>
          <div class="col-lg-6">
          	<h2>Liste </h2>
          	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>id</th>
			        <th>Libelle</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>54</td>
			    		<td>INES</td>
			    	</tr>
			    </tbody>
			</table>
          </div>
      </div>
          
    <div class="row">
		<h1>Taux kilométrique</h1>
		<hr>
	 </div>
	<div class="row">
          <div class="col-lg-6">
          	<h2>Création </h2>
		        <form role="form" action="bureau.php" method="post">
		        <div class="form-group">
		          <label for="email">Libelle</label>
		          <input type="text" class="form-control" id="email" name="login" placeholder="Saisir le login">
		        </div>
		        <button type="submit" class="btn btn-default">Créer</button>
		      </form>
          </div>
          <div class="col-lg-6">
          	<h2>Liste </h2>
          	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>id</th>
			        <th>Libelle</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>54</td>
			    		<td>INES</td>
			    	</tr>
			    </tbody>
			</table>
          </div>
      </div>
          

</div>
