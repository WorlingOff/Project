

            <!--CONTAINER -->
			
            <div class="middle-container container">
                <div class="profile block" align="center"> 
                    <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
                    <div class="profile-picture big-profile-picture clear">
                        <img width="150px" alt="image default profil" src="upload/user-default.jpg" >
                    </div>
                    <h1 class="user-name">Cristian Adogames</h1>
                    <div class="profile-description">
                        <p class="scnd-font-color">Ajoutez votre description...<br>
						en cliquant <a href="">ici</a> </p>
                    </div>
                    <ul class="profile-options horizontal-list">
                    		<p>
      							<a><h1></h1></a>
                       		<a href=""><h1>Amis</h1></a>
					   			<a href=""><h1>Info</h1></a>
					   			<a href=""><h1>Poke</h1></a>
					   			
					   		</p>
                    </ul>
                           
					 <div class="col-md-6">
                <?php if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')): ?>

                <div class="status-post">
                    <form action="microposts.php" method="post" data-parsley-validate>
                        <div class="form-group">
                            <label for="content" class="sr-only">Statut:</label>
                            <textarea name="content" id="content" rows="3" class="form-control" placeholder="Alors quoi de neuf?" data-parsley-minlength="3" data-parsley-maxlength="140"  required="required" maxlength="140"></textarea>
                        </div>

                        <div class="form-group status-post-submit">
                            <input type="submit" name="publish" value="Publier" class="btn btn-default btn-xs">
                        </div>
                    </form>
                </div>
				
                <?php endif; ?>


                <?php if(count($microposts) != 0): ?>
                   <?php foreach ($microposts as $micropost): ?>
                        <?php include('partials/micropost.php'); ?>
                   <?php endforeach; ?>
                <?php else: ?>
                    <p>Cet utilisateur n'a encore rien post&eacute; pour le moment...</p>
                <?php endif; ?>
            </div>
        </div>


    </div>
</div>
					
                   
				   
<!--Fin du MicroPost-->
