
      


      

      <!-- css datatables -->
 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- css fontawesome -->
     
      <h3 class="h5 mb-3 text-gray-700 text-center mt-5"><i class="fas fa-fw fa-tachometer-alt "></i> TABLEAU DE BORD</h3>
      <div class="container">
                    <div class="row">
                        <!-- card loctaire -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-bottom-success border-left-success h-100 px-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="index.php?action=AfficherAdminWithAjax&choix=Demande&choix2=_Etude" class="nav-link">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                TOTAL DEMANDE ETUDE </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= GetRowCountOf("Demande_Etude") ?></div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-users fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cards proprietaire-->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger border-bottom-danger  h-100 px-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="index.php?action=AfficherAdminWithAjax&choix=Demande&choix2=_Stage" class="nav-link">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                TOTAL DEMANDE STAGE </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= GetRowCountOf("Demande_Stage") ?></div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            
                                            <i class="fa-solid fa-clipboard-list fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cards proprietaire-->
                        <div class=" col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info border-bottom-info  h-100 px-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="index.php?action=AfficherAdminWithAjax&choix=Demande&choix2=_Sejour" class="nav-link">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                TOTAL DEMANDE SEJOUR </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= GetRowCountOf("Demande_Sejour") ?></div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                        <i class="text-info fa-solid fa-2x fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cards proprietaire-->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning border-bottom-warning  h-100 px-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="index.php?action=AfficherAdminWithAjax&choix=Demande&choix2=_Job" class="nav-link">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                TOTAL DEMANDE JOB </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= GetRowCountOf("Demande_Job") ?></div>
                                            </a>
                                        </div>
                                        <div class="col-auto">

                                        <i class="fa-solid fa-truck fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            
                    </div>
                    

                   <!--  <div class="col-xl-12 col-lg-12 mb-4">
                            <div class="card  h-100 ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <img src="img/gestionnaire.svg"  alt="" width="500" height="270">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->