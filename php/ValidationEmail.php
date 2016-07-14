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
        <title>VALIDATION INSCRIPTION</title>
				     


    </head>

    <body>
       
					
					

    				<div class="content_formulaire"> 
    				<div class="titre_formulaire">Validation d'Email</div>
                    <?php
                                if (isset($_GET["nom"]) && isset($_GET["prenoms"]) && isset($_GET["password"])) {
                                    if (($_GET["nom"]==$_SESSION["nom"]) && ($_GET["prenoms"]==$_SESSION["prenoms"]) && ($_GET["password"]==$_SESSION["password"])) {
                                        ?>
    					<form method="POST" action="" class="pure-form pure-form-aligned ">
						   <div class="formulaire_a_remplir">
                           
                                            <div style="text-align:center">
                                                    L'inscription à notre site est bien validée
                                                </div>
                                
                                                <div class="pure-control-group">
                                                    
                                                    <button type="submit" class="btn btn-block btn-lg btn-info">Retour à la page d'accueil</button>
                                                </div>
                           </div>
                           </form>

                    
                           <?php 
                                    }

                                    else{
                                        ?>
                                        <form method="POST" action="../index.php" class="pure-form pure-form-aligned ">
                           <div class="formulaire_a_remplir">
                           
                                            <div style="text-align:center">
                                                    L'inscription à notre site na pas bien validée
                                                </div>
                                
                                                <div class="pure-control-group">
                                                    
                                                    <button type="submit" class="btn btn-block btn-lg btn-info">Retour à la page d'inscription</button>
                                                </div>
                           </div>
                           </form>

                                        <?php
                                    }

                                    ?>

                                    <form method="POST" action="../index.php" class="pure-form pure-form-aligned ">
                           <div class="formulaire_a_remplir">
                           
                                            <div style="text-align:center">
                                                    Des paramètres manquent :
                                                </div>
                                
                                                <div class="pure-control-group">
                                                    
                                                    <button type="submit" class="btn btn-block btn-lg btn-info">Retour à la page d'inscription</button>
                                                </div>
                           </div>
                           </form>
                                    <?php

                                }
                           ?>
						   					
						   
    					
    					
    					
    				
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