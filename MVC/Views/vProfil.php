<div class="col-md-8">
  <div class="card mb-3">
    <div class="card-body mb-4">

      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Nom</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          <?php echo "" . $variables["user"]["LastName"] ?>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Prenom</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          <?php echo "" . $variables["user"]["FirstName"] ?>
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
          <h6 class="mb-0"> Âge</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          <?= $variables["user"]["Age"] ?>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Numero téléphone</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          <?= $variables["user"]["Phone"] ?>
        </div>
      </div>
      <hr>


      <div class="d-flex flex-nowrap bd-highlight">
        <div class="order-2 p-1 bd-highlight"><a class="btn btn-secondary" target="_self" href="index.php?action=Logout">Se déconnecter</a></div>
        <div class="order-1 p-1 bd-highlight"><a class="btn text-white " style="background-color:#002A8B" target="_self" href="index.php?action=editprofil">Modifier mes infos</a></div>
      </div>

      </div>
    </div>