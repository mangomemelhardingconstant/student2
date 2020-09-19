


<?php include("inc/header.php") ?><br><br>
<div class="col-md-5 p-0 row-cols-1 container justify-content-center">
<div class="text-primary col bg-warning text-light pt-auto pb-auto h1" style="height: 50px; text-align: center;" >
	INSCRIPTION
</div>

<div class="container shadow bg-success" style="padding-bottom: 15px;" >
<br>
<div class="container shadow bg-light" style="padding-bottom: 20px;" >
             
			<form  id="register-form" method="POST">
				<div id="message"></div>

				<div class="row  mb-5">
				<div class="col-md-6">
                         <label for="" class="form-label text-bold text-primary">Nom et prenoms</label>
                              <input type="text" name="nom" id="fullname" class="form-control" placeholder="Saisissez nom et prénoms">
					
				</div>

				<div class="col-md-6">
                         <label for="" class="form-label text-bold text-primary">E-mail</label>
                         <div id="avert_mail"></div>
                              <input type="email" name="email" id="email" class="form-control" placeholder="Saisissez email">
					
				</div>
				</div>

				<div class="row  mb-5">	
				<div class="col-md-6">
                         <label for="" class="form-label text-bold text-primary">Mot de passe</label>
                              <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Saisissez mot de passe">
					
				</div>

				<div class="col-md-6">
                         <label for="" class="form-label text-bold text-primary">Confirmez mot de passe</label>
                              <input type="password" name="mdp2" id="mdp_c" class="form-control" placeholder="Confirmer mot de passe">
					
				</div>
				</div>

				<div class="row  mb-5">
              <div class="col-md-6">
                         <label for="" class="form-label text-bold text-primary">Numéro de téléphone</label>
                          <div id="avert_tel"></div>
                              <input type="tel" name="tel" id="tel" class="form-control" placeholder="Saisissez numéro de téléphone">
					
				</div>


             <div class="col-md-6">
                         <h6 class="col-md-6 text-bold text-primary">Genre</h6>
                         	<label>
                         		<input type="radio" name="gender" value="male"> Masculin
                         	</label>
                         	<label>
                         		<input type="radio" name="gender" value="female"> Féminin
                         	</label>
                              
                              
				</div>	
				</div>


               <div class="form-group">
                         <label for="profil" class="form-label text-bold text-primary">Avatar</label><br>
                            <input type="file" name="profil" id="profil">  
					
				</div>


				<div class="row  mb-5">
				<div class="col-md-6">	
				 
                           <button type="submit" class=" btn btn-secondary" id="mysubmit" name="send" value="send"> Enregistrement </button>
                </div>

                 <div class="col-md-6">
				 <a href="index.php">Acceuil</a>
                 </div> 
                 </div>     

			</form>
		
	</div>
</div>
</div>
<?php include("inc/footer.php") ?>