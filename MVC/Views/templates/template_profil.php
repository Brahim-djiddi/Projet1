<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
   <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
  <style>body{margin-top:50px;background-color: #F8F9FA;}</style>
</head>
<body >

    <div class="container">
    <div class="main-body">
    
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              
              <?php if(is_admin($_SESSION["CodeP"])) echo'
              <a class="btn text-white my-2" style="width:100%;background-color:#002A8B" href="index.php?action=index2"><i class="fa-solid fa-angle-left mr-1"></i> Administration</a>
              ' 
              ?>
              
            </ol>
          </nav>
        
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
            <a class="btn text-white my-2" style="width:100%;background-color:#002A8B" href="javascript: history.go(-1)"><i class="fa-solid fa-angle-left mr-1"></i> Retourner</a>
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="public/logo/avatar.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo"".$variables["user"]["LastName"]." ".$variables["user"]["FirstName"]?></h4>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>

            <?= $view ?? ""?>

            </div>
          </div>

        </div>
    </div>



          































    
</body>
</html>