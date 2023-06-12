<?php 

include 'header.php';
    // initialize errors variable
	//$errors = "";

	

	// // insert a quote if submit button is clicked
	// if (isset($_POST['submit'])) {
	// 	if (empty($_POST['task'])) {
	// 		$errors = "You must fill in the task";
	// 	}else{
	// 		$task = $_POST['task'];
	// 		$sql = "INSERT INTO tache (task) VALUES ('$task')";
	// 		mysqli_query($db, $sql);
	// 		header('location: index.php');
	// 	}
	// }	


    if (isset($_POST['valider'])){
          $titre =$_POST['titre'];
          $description =$_POST['description'];
          $date_ech =$_POST['date_ech'];
          $complete=$_POST['complete'];
          $sql = "INSERT INTO taches (titre, description, date_ech, complete) VALUES('$titre', '$description', '$date_ech', '$complete')";
          $resultat = mysqli_query($conn,$sql);
          if ($resultat) {
              //echo "tache ajouté avec succes !";
              header("location: indextodo.php");
          }
         }
 


      include 'footer.php';
?>