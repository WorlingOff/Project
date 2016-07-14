<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/pure.css">
		<link rel="stylesheet" type="text/css" href="../css/pure-min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/flat_ui.css">
		<link rel="stylesheet" type="text/css" href="../css/style_confirmationEmail.css">
		<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
		<script src="../js/flat-ui.js"></script>
		<script src="../js/flat-ui.min.js"></script>
		<script type="text/javascript" src="../js/application.js"></script>
        <title>CONFIRMATION INSCRIPTION</title>
				     


    </head>

    <body>
    		<?php
    			/**
    			* 
    			*/
    			class RedactionEmailConfirmation 
    			{
    				private $nom=" ";
    				private $prenoms=" ";
    				private $email=" ";
    				private $mobile=" ";
    				private $password=" ";
    				private $sexe=" ";

    				private $subject=" ";
    				private $headers=" ";


    				//LE MESSAGE A ENVOYER PAR MAIL
    				public $message=" ";
    				function __construct($Nom,$Prenoms,$Email,$Mobile,$Password,$Sexe)
    				{
    					$nom = $Nom;
    					$prenoms = $Prenoms;
    					$email = $Email;
    					$mobile = $Mobile;
    					$password = $Password;
    					$sexe = $Sexe;

    					//CONSTRUCTION DU MAIL
    					$message =  $this->ConstruireEmail($nom,$prenoms,$email,$mobile,$password,$sexe);

    					//ENVOI...
    					$this->EnvoyerMail($email,$message);
    				}

    				function ConstruireEmail($Nom,$Prenoms,$Email,$Mobile,$Password,$Sexe){
    						$Message="";
    						//LE CORPS DU MESSAGE
    						$Message .='                  <div class="content_formulaire" style="width:555px;background-color: #eee;
								margin: 165px 70px auto auto;
								opacity:0.7;"> 
                    <div class="titre_formulaire" style="background-color: white;
									height: 35px;text-align: center;line-height: 35px;">Connexion à Worling</div>
                        <form method="POST" action="php/ValidationMail.php?nom='.$nom.'&prenoms='.$prenoms.'&password='.$password.'" class="pure-form pure-form-aligned ">
                           <div class="formulaire_a_remplir" style="margin:10px;
									padding: 10px;">
                                <div>
                                                    <label>Nom: </label> 
                                                    <label>'.$nom.'</label> 

                                                </div>
                                                <div>
                                                    <label>Prénom(s): </label> 
                                                    <label> '.$prenoms.'  </label> 
                                                </div>
                                                
                                                <div>
                                                    <label>Adresse E-mail: </label> 
                                                    <label> '. $email.' </label> 
                                                </div>
                                                
                                                <div>
                                                    <label>Numéro Mobile: </label> 
                                                    <label> '. $numero.'  </label> 
                                                </div>
                                                
                                                <div>
                                                    <label>Mot de passe: </label> 
                                                    <label>  '.$password.' </label> 
                                                </div>
                                                <div>
                                                    <label>Sexe: </label> 
                                                    <label>  '.$sexe .' </label> 
                                                </div>
                                                <div>
                                                    
                                                    
                                                </div>
                                                <div>
                                                    
                                                    <button type="submit" style="background-color:blue;color:hite">Inscription</button>
                                                </div>
                           </div>
        
                    </form>

                    </div>';
    						
    						return $Message;

    				}

    				function EnvoyerMail($email_destination,$Message){
    					//UTILISATION DE LA FONCTION MAIL 
    						$subject="CONFIRMATION DE L'INSCRIPTION DE ".$nom;
    						$headers='MIME-Version:1.0'."\r\n";
    						$headers .='Content-type: text/html; charset-iso-8859-1'."\r\n";
    						mail($email_destination, $subject, $Message);

    				}
    			}

?>
<?php
    			//RECUPERATION DES DONNEES DU FORMULAIRE
    			$_SESSION["nom"] = htmlentities($_POST["nom"]);
    			$_SESSION["prenoms"] = htmlentities($_POST["prenoms"]);
    			$_SESSION["email"] = htmlentities($_POST["email"]);
    			$_SESSION["numero"] = htmlentities($_POST["numero"]);
    			$_SESSION["password"] = htmlentities(md5($_POST["password"]));
    			$_SESSION["sexe"] = htmlentities($_POST["sexe"]);

    			$nom = $_SESSION["nom"];
    			$prenoms = $_SESSION["prenoms"];
    			$email = $_SESSION["email"];
    			$numero = $_SESSION["numero"];
    			$password = $_SESSION["password"];
    			$sexe = $_SESSION["sexe"];

    			

    			//CREATION DE L'OBJET D'ENVOI
    			$envoi = new RedactionEmailConfirmation($nom,$prenoms,$email,$numero,$password,$sexe);
    		?>
				   
					
					

    				<div class="content_formulaire"> 
    				<div class="titre_formulaire">Confirmation d'Email</div>
    					<form method="POST" action="../index.php" class="pure-form pure-form-aligned ">
						   <div class="formulaire_a_remplir">
						   						<div style="text-align:center">
						    						Un Mail vous a été envoyé pour confirmer votre inscription
						    					</div>
						   		
						    					<div class="pure-control-group">
						    						
						    						<button type="submit" class="btn btn-block btn-lg btn-info">Retour à la page d'accueil</button>
						    					</div>
						   </div>
						   
    					
    					
    					
    				</form>

    				</div>
    				<!-- fin inscription -->

    		
   
			
<script type="text/javascript" src="../js/jquery.backstretch.min.js"></script>

<script type="text/javascript" >
	$.backstretch([
      "../images/im1.jpg",
      "../images/im2.jpg"
], {duration: 4000, fade: 1000});

	
</script>

    </body>

</html>