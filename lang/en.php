<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/pure.css">
		<link rel="stylesheet" type="text/css" href="css/pure-min.css">
		<link rel="stylesheet" type="text/css" href="css/style_lang.css">
		
        <title>INTERFACE WORLING</title>
				        <style type="text/css">
				        /*Style de la page*/
				       	 body{
				        	margin: 0;
				        	padding: 0;
				        	background: url("images/fond_d_ecran.jpg") no-repeat center fixed;
				        	-webkit-background-size: cover; /* permet de voir le même fond d'écran même quand on zoom*/
				 			 background-size: cover; /* permet de voir le même fond d'écran même quand on zoom */
				 			 color: #015291;
				 			 position: relative;
				        	
							}
							/*Conteneur du formulaire*/
							.content_formulaire{
								width:35%;
								background-color: #eee;
								margin: 10% 5% auto auto;
								opacity:0.8;
								
								}
							.content_description{
								width: 35%;
								float: left;
								margin: 10% 5% auto;
								color: #eee;
								font-size: 20px;
								
							}
								/*style du titre du formulaire d'inscription*/
								.titre_formulaire{
									background-color: white;
									height: 35px;
									text-align: center; /*centrage horizontal du titre*/
									line-height: 35px; /*centrage vertical du titre*/
								}
								/*contenu du formualire*/
								.formulaire_a_remplir{
									/*border-right: 1px solid white;*/
									/*display: inline-block;*/
									margin:10px;
									padding: 10px;
								}
								/*le logo dans le header*/
								
								.logo_header{
									float: left;
									border-radius: 100%;
								}


								#header{
									background-color: #eee;
									height:60px;
									padding: 10px;
									opacity:0.9;
								}
								#header > form{
									float: right;
								}
								/*Le formualire de Connexion*/
								.form_connexion{
									height:60px;
								}
								.form_connexion tr td{
									padding-right: 5px;
								}


								.footer{
									background-color: #eee;
									width:100%;
									height:50px;
									margin: 0 auto;

									}
								.footer table{
									margin: 0 auto;
								}
								.footer tr td {
									padding-right: 100px;
									padding-top: 15px;
								}


				        </style>


    </head>

    <body>
    			<!-- Style basé sur PURE CSS-->
    				<style scoped>

    					.button-secondary {
            				color: white;
            				border-radius: 4px;
            				text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            				background: #015291; 
        								}
        				.button-secondary:hover {
            				color: white;
            				border-radius: 4px;
            				text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            				background: #015291; 
            				opacity: 0.8;
        								}

        				 .button-xsmall {
				            font-size: 70%;
				        }

				        .button-small {
				            font-size: 85%;
				        }

				        .button-large {
				            font-size: 110%;
				        }

				        .button-xlarge {
				            font-size: 125%;
				        }
				        .lien_utile{
				        	margin: auto 5% auto auto;
				        }

				         .lien_utile td{
				        	padding: 20px;
				        	
				        }
				         .lien_utile  td  a {
				        	color:#eee;
				        	text-decoration: none;
				        }

				        a{
				        	text-decoration: none;
				        	

				        }
				        a:hover{
									text-decoration: underline;
								}
				    </style>
				    <!-- header -->
				    <div id="header">
				    	<img src="images/logo_worling.jpg" class="logo_header" width="65" height="65" />

							

				    	<form method="POST" action="" class="pure-form">
						   
						   		<table class="form_connexion">
						   			<tr>
						   				<td><span class="custom-dropdown custom-dropdown--white">
								<select class="custom-dropdown__select custom-dropdown__select--white" style="width:100px;background-color:#eee;border:none;">
									<option><a>Français</a></option>
									<option><a>English</a></option>
									<option><a>Español</a></option>
									<option><a>Italiano</a></option>
								</select>
							</span></td>
						   				<td><input type="email" placeholder="Adresse Electronique"></td>
						   				<td><input type="password" placeholder="Mot de Passe"></td>
						   				<td><button type="submit" class=" button-xlarge button-secondary pure-button">Connexion</button></td>
						   			</tr>
						   			<tr>
						   				<td></td>
						   				<td> <a href="">Resté Connecté(e)</a></td>
						   				
						   				<td><a href="">Mot de Passe oublié ?</a></td>
						   				<td></td>
						   			</tr>
						   		</table>
						    						
						    			
						    					
						   
						   </form>	
						   
    					
    				</div>

					<!-- fin header -->
					<div class="content_description">
						<h1>Worling   </h1>
						<p>Discover, Share and Exchange with your Friends and The World! <br/>Connect Now</p>
					</div>
					<!-- Inscription -->

    				<div class="content_formulaire"> 
    				<div class="titre_formulaire">Connect to Worling</div>
    					<form method="POST" action="" class="pure-form pure-form-aligned ">
						   <div class="formulaire_a_remplir">
						   		<div class="pure-control-group">
						    						<label class="pure-input-1-2">Last Name: </label> 
						    						<input type="text" name="nom" placeholder="Nom" class="pure-input-1-2">

						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">First Name: </label> 
				    								<input type="text" name="prenoms" placeholder="Prénoms" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Birth Date: </label> 
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
						    						<label class="pure-input-1-2">Mail Address: </label> 
				    								<input type="email" name="email" placeholder="Adresse Electronique" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Mobile Phone: </label> 
				    								<input type="text" name="numero" placeholder="Numéro mobile" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Confirm Mobile Phone: </label> 
				    								<input type="text" name="confirm_numero" placeholder="Confirmer Adresse Electronique" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-input-1-2">Password: </label> 
				    								<input type="password" name="password" placeholder="Mot de Passe" class="pure-input-1-2">
						    					</div>
						    					<div class="pure-control-group">
						    						<label class="pure-checkbox">Male&nbsp;&nbsp;<input type="radio" name="sexe" value="homme"></label>
						    						<label class="pure-checkbox">Female&nbsp;&nbsp;<input type="radio" name="sexe" value="femme"></label>
						    					</div>
						    					<div class="pure-controls">
						    						<button type="submit" class=" button-xlarge button-secondary pure-button">Inscription</button>
						    					</div>
						   </div>
						   <!-- <img src="images/logo_worling.jpg" class="logo" width="200" height="200" />	 -->				
		    									
    					
    					
    					
    				</form>

    				</div>
    				<!-- fin inscription -->

    		
    			
    			
    			
    			
    				
<!-- Liens utiles -->
<table class="lien_utile">
	<tr>
		<td><a href="">About Us</a></td>
		<td><a href="">Help</a>	</td>
		<td><a href="">Rules</a></td>
		<td><a href="">API</a></td>
		<td><a href="">&copy; Worling</a></td>
	</tr>
</table>



    </body>

</html>