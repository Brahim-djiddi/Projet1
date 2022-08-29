<script>
    $(document).ready(function() {
        $('#demande').DataTable();
    });
</script>


<link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />


<!--script jquery datatables-->
<div class="card border-left-secondary h-90 mx-3 ">
    <?php if (isset($_SESSION["success"])) {
                echo"<div class='h4 text-center alert alert-success' role='alert'>".$_SESSION["success"]."</div>";
                unset($_SESSION["success"]);}
                ?>
    <div class="card-body">
        <h2 class="text-center">  Galleries </h2>
        <!-- button madal -->
        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#AjouterEquipe" data-bs-whatever="@mdo">
            Ajouter une image
        </button>
        <table id="demande" class="table table-striped table-bordered mt-3 mb-5" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">gallery</th>
                    <th scope="col">titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date D'ajout</th>
                    <th scope="col" colspan='3'>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $cpt = 0;
                foreach ($variables["Eq"] as $eq) {
                    $cpt++; ?>

                    <tr>
                        <td><?= $cpt ?></td>
                        <td> <img src="public//images//gallery//<?= $eq["image"] ?>" alt="Gallery" class="img-fluid" width="70" height="70"></td>
                        <td><?= $eq["titre"] ?></td>
                        <td><?= $eq["description"] ?></td>
                        <td><?= $eq["date"] ?></td>
                        <td><a class="btn btn-sm btn-Primary" href="#" data-bs-toggle="modal" data-bs-target="#ModifierEquipe<?= $cpt ?>" data-bs-whatever="@mdo">Modifier</a></td>
                        <td><a class="btn btn-sm btn-danger" href="index.php?action=supprimer_gallery&supEq=<?= $eq["id"] ?>">Supprimer</a></td>
                        
                        
                    </tr>
                    <!-- modal modifier equipe -->
                    <div class="modal fade" id="ModifierEquipe<?= $cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modifier une galleries</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="index.php?action=modifier_gallery" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Titre:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="titre" placeholder="Entrer un nom" value="<?= $eq["titre"] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Description:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="description" placeholder="Entrer un prenom" value="<?= $eq["description"] ?>" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Photo:</label>
                                            <input type="file" class="form-control" id="recipient-name" name="photo" required >
                                        </div>

                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" id="recipient-name" name="id" value="<?= $eq["id"] ?>">
                                        </div>
                                      

                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-sm btn-primary" value="Modifier">
                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>


<!-- modal Ajouter equipe -->

<div class="modal fade" id="AjouterEquipe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php?action=ajouter_gallery" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Titre:</label>
                        <input type="text" class="form-control" id="recipient-name" name="titre" placeholder="Entrer un nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Description:</label>
                        <input type="text" class="form-control" id="recipient-name" name="description" placeholder="Entrer un prenom" required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Photo:</label>
                        <input type="file" class="form-control" id="recipient-name" name="photo" required>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Rengistrer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
