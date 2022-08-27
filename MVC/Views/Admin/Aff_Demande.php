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

<!--script jquery datatables-->
<div class="card border-left-secondary h-90 mx-3 ">
                <?php if (isset($_SESSION["success"])) {
                echo"<div class='h4 text-center alert alert-success' role='alert'>".$_SESSION["success"]."</div>";
                unset($_SESSION["success"]);}
                ?>
    <div class="card-body">
        <h2 class="text-center">Liste des demandes en ligne</h2>

        <table id="demande" class="table table-striped table-bordered mt-3 mb-5" style="width:100%">
            <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Etudiants</th>
                    <th scope="col">Type de demande</th>
                    <th scope="col">Date de demande</th>
                    <th scope="col" colspan=4>Demandes</th>
                </tr>
            </thead>

            <tbody>
                <?php $cpt=0; foreach ($variables["AFF"] as $AD) { $cpt++; ?>
                    <tr>
                        <td><?= $cpt?></td>
                        <td><?= $AD["Owner"] ?></td>
                        <td><?= $AD["Type"] ?></td>
                        <td><?= $AD["Date_Ajout"] ?></td>
                        <td><a class="btn btn-sm btn-success" href="PDFs/completed/this_year/<?= $AD['Link']; ?>" download="Fiche_Admission">Télécharger</a></td>
                        <td><a class="btn btn-sm btn-success" href="PDFs/completed/this_year/<?= $AD['Link']; ?> " target="_blank" >Consulter</a></td>
                        <td><a class="btn btn-sm btn-success" href="index.php?action=supprimer_pdf&id=<?php echo $AD['Link']; ?>" >supprimer</a></td>
                        <td><a class="btn btn-sm btn-success" href="index.php?action=modifier_pdf&id=<?php echo $AD['Link']; ?>" >modifier</a></td>
                    </tr>
                <?php } ?>

            </tbody>



        </table>

    </div>
</div>