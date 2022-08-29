<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Telechargement..</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

</head>
<body>
           
    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12 mt-lg-5 text-center">
            <h1 class="mb-4" style="color:#002A8B ;">Fiche d'admission</h1>

          </div>
        </div>
      </div>
    </div>
    <section class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-12 blog-content">
          <div class="container text-center">

<h1>Attention !! <?php echo $_SESSION['username'];?> votre fiche d'admission existe deja
<a href="./PDFs/completed/this_year/<?php echo $_SESSION["Link"];?>" download="Fiche_admission">Télécharger le ici</a><br>
<a href="index.php?action=modifier_pdf&id=<?php echo $_SESSION["Link"];?>" >Modifier le ici</a><br>
<br>
<a href="index.php">Retourner vers la Page d'aceuille</a>

</h1>

<div class="clearfix mb-5"></div>

</div>
            <div class="row mb-5">

            </div>

          </div>

        </div>
      </div>
    </section>
                  

      <?php //var_dump($_SESSION) ?>
</body>
</html>


  
