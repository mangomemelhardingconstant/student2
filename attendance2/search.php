

<?php include("inc/header.php") ?>

<section style=" padding-left:300px;" >
         <form action="trait_search.php" method="POST" id="form-search">
          <div id="message"></div>
          
         	<div class="row">
		<div class="table-responsive table-bordered col-md-4 offset-2 shadow p-4 bg-light">
            Date: <input type="date" name="date_search" id="date_search" class="form-control">
				</div>


				<button type="submit" class=" btn btn-primary" id="mysubmit"  name="search" value="search">Recherche </button>

				</div>
				</form>
				<div id="tableau"></div>
</section>
 


<?php include("inc/footer.php") ?>