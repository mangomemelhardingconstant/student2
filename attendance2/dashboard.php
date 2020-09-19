

<?php include("inc/header.php") ?>
<?php include("bd.php")?>

<div class="text-primary col bg-warning text-light pt-auto pb-auto h1" style="height: 50px; text-align: center;" >
	DASHBORD
</div>
<!------ Include the above in your HEAD tag ---------->

     <?php $sql="SELECT etudiant.nom, presence.datesign, presence.timesign FROM etudiant, presence WHERE etudiant.iduser = presence.iduser";
    $query=$conn->query($sql);  
    $result=$query->fetchAll();
    $count = 1;
  ?>

<div class="container">
<button type="submit" class=" log btn btn-light" id="mysubmit" name="send" value="send"><a href="logout.php"> Déconnexion </a></button>
<br>
    <div class="table-responsive table-bordered col-md-6 offset-3 shadow p-4 bg-light">
            <table class="table movie-table">
                  <thead>
                  <tr class= "movie-table-head">
                      <th>N°</th>
                      <th>Nom de l'etudiant</th>
                      <th>Date de signature</th>
                      <th>Heure de signature</th>   
                  </tr>
              </thead>   
              <tbody>
               
               <?php foreach ($result as $row): ?>   
                <!--row-->
                <tr>
                    <th><?=$count++?></th>
                    <td><?= $row['nom']?></td>
                <td><?= $row['datesign']?></td>
                <td><?= $row['timesign']?></td>                                       
                </tr>
            <?php endforeach ?>
            <!--fin de La structure foreach -->
  
              </tbody>
            </table>
            </div>
</div>
<br>
<?php include("search.php")?>

<br><br><br>

    <?php include("inc/footer.php") ?>