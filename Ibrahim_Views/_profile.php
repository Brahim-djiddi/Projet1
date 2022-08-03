
			<?php require_once 'menu.php' ?>

<!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
             <br><br>
         </nav>
    
<!-- /Breadcrumb -->

<div class="container">

      <div class="row gutters-sm ">
        <div class="col-md-4 d-none d-md-block">
          <div class="card shadow-sm">
            <div class="card-body">
              <nav class="nav flex-column nav-pills nav-gap-y-1">
                <a href="_profile.php" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>  Mon compte
                </a>
				<a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>  Notification
                </a>
                
                <a href="_securite.php" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>  Securité
                </a>
               
                <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>  Payement
                </a>
				<a  href="" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>  Paramètres du compte
                </a>
              </nav>
            </div>
          </div>
        </div>


       <!--  device size -->
        <div class="col-md-8">
          <div class="card shadow-sm">
            <div class="card-header border-bottom mb-3 d-flex d-md-none">
              <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                <li class="nav-item">
                  <a href="" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                </li>
				<li class="nav-item">
                  <a href="_securite.php" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                </li>
               
               
                <li class="nav-item">
                  <a href="" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                </li>
				<li class="nav-item">
                  <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                </li>

              </ul>
            </div>


    <!--   profile card -->
	<div class="card-body tab-content">
              <div class="tab-pane active" id="profile">
               
            
                  <div class="card">
                  <div class="tab-pane" id="security">
                <h6>MON PROFILE</h6>
                <hr>
						<div class="row gutters-sm">
							<div class="col-lg-3 col-md-3 col-sm-3 mb-3">
								<div class="card ">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<?php if (!empty($_SESSION['profile'])) {?>
												<img src="images/<?=$_SESSION['profile']?>" alt="profile client"  width="150" height="150">
											<?php }else {?>
												<img src="images/testeprof.png" alt="profile client " width="150" height="150">
											<?php }?>
										</div>
									</div>
									<a class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#ModalProfile"><i class="fas fa-id-card text-white"></i> Editer</a>
								</div>
		
							</div>

							<div class="col-md-9 col-lg-9 col-xl-9 col-sm-9 col-xs-9 ">
								<div class="mb-3">
								
										<div class="row">
											<div class="col-sm-4 col-lg-4 col-xs-4 col-md-4">
												<h6 class="mb-0"> Nom & Prenom</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<?php echo $_SESSION['nomC'] ?>
												<?php echo  $_SESSION['prenomC'] ?>

											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-4 col-lg-4 col-xs-4 col-md-4">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<?php echo $_SESSION['email']; ?>
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="col-sm-4 col-lg-4 col-xs-4 col-md-4">
												<h6 class="mb-0">Sexe</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<?php echo $_SESSION['sexe']; ?>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-4 col-lg-4 col-xs-4 col-md-4">
												<h6 class="mb-0">Nom utilisateur</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<?php echo $_SESSION['usernameC']; ?>
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="col-sm-4 col-lg-4 col-xs-4 col-md-4">
												<h6 class="mb-0">Mots de passe</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<?php echo  $_SESSION['passwordC'] ?>
											</div>
										</div>
										<hr>


										<div class="row">
											<div class="col-sm-4 col-lg-4 col-xs-4 col-md-4">
												<h6 class="mb-0">N&#176; Telephone</h6>
											</div>
											<div class="col-sm-8 text-secondary">
												<?php echo $_SESSION['numero']; ?>
											</div>
										</div>
										
									</div>
							
						   </div>	
						</div>   
		        </div>
	        </div>
       </div>
                       
     </div>

   </div>
</div>
    


<?php include 'Modal_Profile.php' ?>
<?php include_once 'Public/Js/script.php' ?>
<script src="Public/Js/scripts.js"></script>

</body>
</html>








  
