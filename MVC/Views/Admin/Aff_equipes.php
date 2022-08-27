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
    <div class="card-body">
        <h2 class="text-center">Liste des équpes</h2>
        <!-- button madal -->
        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#AjouterEquipe" data-bs-whatever="@mdo">
            Rengister une equipe
        </button>
        <table id="demande" class="table table-striped table-bordered mt-3 mb-5" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Reseaux sociaux</th>
                    <th scope="col" colspan=2>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $cpt = 0;
                foreach ($variables["Eq"] as $eq) {
                    $cpt++; ?>

                    <tr>
                        <td><?= $cpt ?></td>
                        <td> <img src="public/images/<?= $eq["Profile"] ?>" alt="Admin" class="rounded-circle" width="60" height="60"></td>
                        <td><?= $eq["Nom"] ?></td>
                        <td><?= $eq["Prenom"] ?></td>
                        <td><?= $eq["Titre"] ?></td>
                        <td>

                            <div class="btn-group-horizontal" role="group" aria-label="Vertical button group">
                                <a href="<?= $eq["Facebook"] ?>" type="button" class="btn btn-sm btn-light" target="_blank"><i class="fa-brands fa-square-facebook fa-2x" style="color:#0B82EE;"></i></span></a>
                                <a href="<?= $eq["Twitter"] ?>" target="_blank" class="btn btn-sm btn-light"><i class="fa-brands fa-square-twitter fa-2x" style="color:#1EA1F2;"></i> </span></a>
                                <a href="<?= $eq["Instagram"] ?>" target="_blank" class="btn btn-sm btn-light"><i class="fa-brands fa-square-instagram fa-2x" style="color:rgb(246,8,142);"></i> </span></a>
                                <a href="<?= $eq["Linkedin"] ?>" target="_blank" class="btn btn-sm btn-light"><i class="fa-brands fa-linkedin fa-2x" style="color:#0D63BC;"></i> </span></a>
                            </div>
                        </td>
                        <td><a class="btn btn-sm btn-Primary" href="#" data-bs-toggle="modal" data-bs-target="#ModifierEquipe<?= $cpt ?>" data-bs-whatever="@mdo">Modifier</a></td>
                        <td><a class="btn btn-sm btn-danger" href="index.php?action=supprimer_equipe&supEq=<?= $eq["idEq"] ?>">Supprimer</a></td>
                    </tr>
                    <!-- modal modifier equipe -->
                    <div class="modal fade" id="ModifierEquipe<?= $cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modifier une équipe</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="index.php?action=modifier_equipe" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Nom:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="nom" placeholder="Entrer un nom" value="<?= $eq["Nom"] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Prenom:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="prenom" placeholder="Entrer un prenom" value="<?= $eq["Prenom"] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Titre:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="titre" placeholder="Entrer un titre" value="<?= $eq["Titre"] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Facebook:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="facebook" placeholder="Entrer le nom du facebook" value="<?= $eq["Facebook"] ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Twitter:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="twitter" placeholder="Entrer le nom du twitter" value="<?= $eq["Twitter"] ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Instagram:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="instagram" placeholder="Entrer le nom du instagram" value="<?= $eq["Instagram"] ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Linkedin:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="linkedin" placeholder="Entrer le nom du linkedin" value="<?= $eq["Linkedin"] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Photo:</label>
                                            <input type="file" class="form-control" id="recipient-name" name="photo" value='<?= $eq["Profile"] ?>' required>
                                        </div>

                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" id="recipient-name" name="idEq" value="<?= $eq["idEq"] ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une équipe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php?action=ajouter_equipe" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nom:</label>
                        <input type="text" class="form-control" id="recipient-name" name="nom" placeholder="Entrer un nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Prenom:</label>
                        <input type="text" class="form-control" id="recipient-name" name="prenom" placeholder="Entrer un prenom" required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Titre:</label>
                        <input type="text" class="form-control" id="recipient-name" name="titre" placeholder="Entrer un titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Facebook:</label>
                        <input type="text" class="form-control" id="recipient-name" name="facebook" placeholder="Entrer le nom du facebook" required>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Twitter:</label>
                        <input type="text" class="form-control" id="recipient-name" name="twitter" placeholder="Entrer le nom du twitter" required>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Instagram:</label>
                        <input type="text" class="form-control" id="recipient-name" name="instagram" placeholder="Entrer le nom du instagram" required>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Linkedin:</label>
                        <input type="text" class="form-control" id="recipient-name" name="linkedin" placeholder="Entrer le nom du linkedin" required>
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