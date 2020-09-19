 <?php 
 include("bd.php");
 $answer=null;
 $table = null;

if (isset($_POST)) {
	
	$date_search=isset($_POST['date_search'])?$_POST['date_search']:null;


	if (!empty($date_search)) {
		
		$sql="SELECT etudiant.nom, presence.datesign, presence.timesign FROM etudiant, presence WHERE etudiant.iduser = presence.iduser and datesign='$date_search' ";
    $query=$conn->query($sql);  
    $result=$query->fetchAll();
    if ($result) {
    	
    
    $count = 1;
$table='<br><br>
            <div class="container">
            <div class="table-responsive table-bordered">
                    <table class="table movie-table">
                          <thead>
                          <tr class= "movie-table-head">
                              <th>N°</th>
                              <th>Nom de l\'etudiant</th>
                              <th>Date de signature</th>
                              <th>Heure de signature</th>   
                          </tr>
                      </thead>   
                      <tbody>';
foreach ($result as $row){
  $table .= '<tr>
                            <th>'.$count++.'</th>
                            <td>'. $row['nom'].'</td>
                        <td>'. $row['datesign'].'</td>
                        <td>'. $row['timesign'].'</td>                                       
                        </tr>';

                     }
    $table .='</tbody>
                    </table>
                    </div>
        </div>';

$answer = 'ok';
        	 }else $answer= "Aucun etudiant n'a signé a cette date";

        	}else $answer= "veuillez inserer une date svp";

          $output=array(
            'msg'=>$answer,
            'tbl'=> $table
          ); 

        echo json_encode($output);


         // include("inc/footer.php");

} ?>



 