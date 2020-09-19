 	<?php


	if (isset($_POST)) {
		
		include("bd.php");

			$answer=null;
			$email_teacher=$_POST['email_teacher'];
			$mdp_teacher=$_POST['mdp_teacher'];

	if (!empty($email_teacher) and !empty($mdp_teacher)) {

			$sql= "SELECT * FROM teacher WHERE email_teacher='$email_teacher' AND mdp_teacher='$mdp_teacher' " ;
			$query=$conn->query($sql);
	
if ($query->rowCount() > 0) {

			while($row =$query->fetch()) {
				$_SESSION['id_teacher']=$row["id_teacher"];
	  		$_SESSION['name_teacher']=$row["name_teacher"];
	  		$_SESSION['email_teacher']=$row["email_teacher"];
				$_SESSION['mdp_teacher']=$row["mdp_teacher"];
				}
				  $answer='ok';

} else $answer='mot de passe ou email incorect';

	}else $answer='Veuillez remplir les champs S.V.P';
	}

$output=array('msg' =>$answer);

echo json_encode($output);


	?>