<div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"".$variables["user"]["LastName"]?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prenom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"".$variables["user"]["FirstName"]?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $variables["user"]["Email"] ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom d'utilisateur</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $variables["user"]["Username"] ?>
                    </div>
                  </div>
                  <hr> 
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Age</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $variables["user"]["Age"] ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $variables["user"]["Phone"] ?>
                    </div>
                  </div>
                  <hr>


                  
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="_self" href="index.php?action=editprofil">Edit</a>
                    </div>
                  </div>
                </div>
              </div>