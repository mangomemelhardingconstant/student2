 



<?php include("inc/header.php") ?><br><br>
<div class="col-md-4 p-0 row-cols-1 container justify-content-center">
<div class="text-warning col bg-warning text-light pt-auto pb-auto h1" style="height: 50px; text-align: center;" >
	DASHBORD TEACHER 
</div>

<div class="container admin-form shadow p-4 bg-success">
	<div class="row">
		<div class="col-md-6 offset-3 shadow p-4 bg-light">
             
			<form  id="teacher_login" method="POST" >
				<div id="message"></div>
				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">Votre Identifiant</label>
                              <input type="email" name="email_teacher" id="email_teacher" class="form-control" placeholder="admin@gmail.com" autocomplete="off">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">Mot de passe</label>
                              <input type="password" name="mdp_teacher" id="mdp_teacher" class="form-control" placeholder="admin">
					
				</div>

				 
                           <button type="submit" class=" btn btn-secondary" id="mysubmit" name="send" value="send"> Connexion </button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="index.php">Acceuil</a>
                       
			</form>
			
		</div>
		
	</div>
	</div>
</div>
<?php include("inc/footer.php") ?>