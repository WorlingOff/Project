<!DOCTYPE html>
<html lang="fr">

    <head>

	 <!--meta-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Worling est un reseau social qui te permet de discuter ,faire de nouvelles rencontre amicale ou professionel,de raconter tes vacances ou bien simplement ta journee , sur worling 
	   tu peux egalement poster des videos et pourquoi pas devenir connu(s)...Worling c'est le reseau social qui regarde a demain">
		<meta name="author" content="Worling">
		<meta name="keywords" content="Worling,Reseau,Social,Amis,Partage,Publications,Futur">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--StyleSheet+JS-->
		<link rel="stylesheet" type="text/css" href="assets/css/pure.css">
		<link rel="stylesheet" type="text/css" href="assets/css/pure-min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style_index.css">
		<script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
		 <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
       <script src="js/respond.js"></script>
    <![endif]-->
        <title>Worling-Le Reseau Social qui regarde a demain</title>
		<meta name="google-site-verification" content="NM74JnpA72ein-HfGh7qLVjlMKxk75O9iKnoPgJEaXM" />
				        <style type="text/css">
				     
				        </style>


						<!--Favicon-->
		<link rel="icon" size="192x192" href="assets/img/favicon/favicon.ico">
        <link rel="image_src" href="assets/img/favicon/favicon.ico" />
		
    </head>

    <body>
    			    <body>
    			<!-- Style basé sur PURE CSS-->
    				<style scoped>

    			

				    </style>
				    <!-- header -->
				    <div id="header">
				    	<img src="assets/images/logo_worling.jpg" class="logo_header" width="65" height="65" />

						
			
						

				    	<form method="POST" action="" class="pure-form">
						   
						   		<table class="form_connexion">
						   			<tr>

						   				
						   				<td><input type="email" placeholder="Adresse Electronique"></td>
						   				<td><input type="password" placeholder="Mot de Passe"></td>
						   				<td><button type="submit" class="btn btn-block btn-lg btn-primary">Connexion</button></td>
						   			</tr>
						   			<tr>
						   				
						   				<td> <a href="">Resté Connecté(e)</a></td>
						   				
						   				<td><a href="">Mot de Passe oublié ?</a></td>
						   				<td></td>
						   			</tr>
						   		</table>
						    						
						    			
						    					
						   
						   </form>	
						   
    					
    				</div>

					<!-- fin header -->
					<div class="content_description">
						<h1>Worling-</h1>
						<h5>Découvrir, partager et communiquer avec vos proches et le monde! Connectez-vous Maintenant </h5>
						<select class="form-control" style="width:150px">
							<option>Langues :</option>
							<option>Français</option>
							<option>English</option>
							<option>Español</option>
							<option>Deutsch</option>
							<option>Arabe</option>
						</select>
					</div>

    				<!-- Inscription -->

    				<div class="content_formulaire"> 
    				<div class="titre_formulaire">Connexion à Worling</div>
    					<form method="POST" action="php/ConfirmationMail.php" class="pure-form pure-form-aligned ">
						   <div class="formulaire_a_remplir">
						   		<div class="pure-control-group">
						    						<label class="pure-input-1-2">Nom: </label> 
						    						<input type="text" name="nom" placeholder="Nom" class="pure-input-1-2">

						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Prénom: </label> 
				    								<input type="text" name="prenoms" placeholder="Prénoms" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Date de naissance: </label> 
						    						<select name="jour" class="pure-input-1-6">
						    							<option>Jour</option>
						    							<?php 
						    							for ($i=1; $i <=31 ; $i++) { 
						    								echo "<option>".$i."</option>";
						    							}
						    							?>
						    						</select>
						    						<select name="mois" class="pure-input-1-6">
						    							<option>Mois</option>
						    							<?php 
						    							$tab_mois = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
						    							foreach ($tab_mois as  $value) {
						    								echo "<option>".$value."</option>";
						    							}
						    							
						    							?>
						    						</select>
						    						<select name="annee" class="pure-input-1-6">
						    							<option>Année</option>
						    							<?php 
						    								//année de début
						    							$annee_debut = "1900";
						    							$annee_actuelle = date("Y");
						    							for ($i=$annee_actuelle; $i >= $annee_debut ; $i--) { 
						    								echo "<option>".$i."</option>";
						    										}
						    							?>
						    						</select>
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Adresse E-mail: </label> 
				    								<input type="email" name="email" placeholder="Entrez votre Adresse Electronique" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Confirmer E-mail: </label> 
				    								<input type="text" name="confirm_email" placeholder="Confirmation de l'Adresse Electronique" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Numéro Mobile: </label> 
				    								<input type="text" name="numero" placeholder="N° de telephone" class="pure-input-1-2">
						    					</div>
						    					
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Mot de passe: </label> 
				    								<input type="password" name="password" placeholder="Entrez votre Mot de Passe" class="pure-input-1-2">
						    					</div>
												<div class="pure-control-group">
						    						<label class="pure-input-1-2">Confimater le Mot de passe: </label> 
				    								<input type="password" name="password_Confirm" placeholder="Confirmation du Mot De Passe" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-checkbox">Homme&nbsp;&nbsp;<input type="radio" name="sexe" value="homme"></label>
						    						<label class="pure-checkbox">Femme&nbsp;&nbsp;<input type="radio" name="sexe" value="femme"></label>
						    					</div>
						    					<div class="pure-control-group">
						    						
						    						
						    					</div>
						    					<div class="pure-control-group">
						    						
						    						<button type="submit" class="btn btn-block btn-lg btn-info pure-input-1">Inscription</button>
						    					</div>
						   </div>
						   <!-- <img src="assets/images/logo_worling.jpg" class="logo" width="200" height="200" />	 -->				
		    									
    					
    					
    					
    				</form>

    				</div>
    				<!-- fin inscription -->

    		
    			
    			
    			
    			
    				

    		
    			
    			
    			
    			
    				
<!-- Liens utiles -->
<table class="lien_utile">
	<tr>

		<td><a href="">A propos de Nous</a></td>
		<td><a href="">Aide</a>	</td>
		<td><a href="">Règles</a></td>
		<td><a href="">API</a></td>
		<td><a href="">&copy; Worling</a></td>
	</tr>
</table>
			
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>

<script type="text/javascript" >
	$.backstretch([
      "images/im1.jpg",
      "images/im2.jpg"
], {duration: 4000, fade: 1000});

	
</script>
<script src="assets/js/flat-ui.js"></script>
		<script src="assets/js/flat-ui.min.js"></script>
		<script type="text/javascript" src="jassets/s/application.js"></script>
    </body>
	
</html>