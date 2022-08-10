<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="public/css/profil_edit.css">
<link rel="stylesheet" href="public/css/profil.css">
<link rel="stylesheet" href="public/css/our_css.css">


    <title>Document</title>
</head>
<body >


    <!-- <div class="view"><?//= $view ?? ""?></div> -->
    <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
              <!-- <li class="breadcrumb-item"><a href="javascript: history.go(-1)">Retourner</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li> -->
            </ol>
          </nav>
          <!-- /Breadcrumb -->
          <?= $view ?? ""?>
    
</body>
</html>