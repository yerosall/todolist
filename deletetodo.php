<?php 
include 'header.php' ;
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$req = "DELETE FROM taches WHERE id='$id' ";
	$resultat = mysqli_query($conn,$req);
	if ($resultat) {
        //echo "Produit ajouté avec succes !";
		header("location: indextodo.php");
	}
}

include 'footer.php' ;


?>