<?php 
include "header.php";


if(isset($_GET['id'])) {
    $id1 = $_GET['id'];
    $req1 = "SELECT * FROM taches WHERE id = '$id1' ";
    $lines = mysqli_query($conn,$req1);
    if($lines) {
        if($rows = mysqli_fetch_assoc($lines)) {?>
          <form method="POST" action="edittodo.php?id=<?php echo $rows['id'] ?>">

            <div class="mb-3">
                <label for="titre" class="form-label">titre</label>
                <input type="text" name="titre" class="form-control" value="<?php echo $rows['titre']; ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" name="description" class="form-control" value="<?php echo $rows['description']; ?>">
            </div>
           
            <div class="mb-3">
                <label for="date_ech" class="form-label">Date</label>
                <input type="date" class="form-control" name="date_ech"  value="<?php echo $rows['date_ech']; ?>">
            </div>
            <div class="mb-3">
                <label for="complete" class="form-label">complete</label>
                <input type="text" name="complete" class="form-control" value="<?php echo $rows['complete']; ?>">
            </div>

            
            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="valider_modif">Valider</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </div>

            
        </form>  
        <?php 
        }
    }
    if (isset($_POST['valider_modif'])) {

        $id = $_GET['id'];
        $titre = $_POST['titre'];
        $description= $_POST['description'];
        $date_ech = $_POST['date_ech'];
        $complete = $_POST['complete'];
    
        $req2=" UPDATE taches
        SET titre = '$titre', description = '$description', date_ech = '$date_ech' , complete = '$complete'  WHERE id='$id' ";
        $result = mysqli_query($conn,$req2);
    if ($result) {
        
        header("location:indextodo.php");
        }
    }
    }
    include "footer.php";
    ?>