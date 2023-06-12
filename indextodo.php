<?php 
include 'header.php';
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary "style="background-color: #e3f2fd;" >

  <div class="container-fluid"  >
    <a class="navbar-brand" href="#">TO DO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mes t@ches
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>

<nav class="navbar bg-dark" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ajouter une tache
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- debut formulaire -->
        
        <form method="POST" action="addtodo.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="titre" class="form-label">titre</label>
                <input type="text" class="form-control" name="titre">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label for="date_ech" class="form-label">Date_ech</label>
                <input type="date" class="form-control" name="date_ech">
            </div>
            <div class="mb-3">
                <label for="complete" class="form-label">Complete</label>
                <input type="text" class="form-control" name="complete">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="valider">Valider</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </div>

            
        </form>
        <!-- fin formulaire -->

      </div>
    </div>
  </div>
</div>
<!-- fin du modal -->



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
		<h2 style="font-style: 'Hervetica';">LIST OF TASKS</h2>
	
  <table class="table">
    <thead>
      <tr>
      <th>id</th>
        <th>titre</th>
        <th>description</th>
        <th>date_ech</th>
        <th>complete</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>




<!--Debut de la care-->

<?php
$req = "SELECT * FROM taches";
$result = mysqli_query($conn,$req);
 while ($row = mysqli_fetch_assoc($result)) { ?>

  <div class="card-body">
  <tr>
        <td><?php echo $row['id'];?></td>
        <h5 class="card-title text-primary"><td><?php echo $row['titre'];?></td></h5>
        <td><?php echo $row['description'];?></td>
        <td><?php echo $row['date_ech'];?></td>
        <td><?php echo $row['complete'];?></td>

    <td>
      <a class="btn btn-danger" href="deletetodo.php?id=<?php echo $row['id']; ?>">Supprimer <i class="fa-solid fa-trash-can"></i></a>
      <a class="btn btn-info" href="edittodo.php?id=<?php echo $row['id']; ?>">Editer <i class="fa-sharp fa-regular fa-pen-to-square"></i></a>
    </td>
  </tr>
  </div>
  <?php }?>
  </table>

  </tbody>
    
 



</body>
<?php 
include 'footer.php';
?>