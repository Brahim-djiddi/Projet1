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
                <?php if (isset($_SESSION["success"])) {
                echo"<div class='h4 text-center alert alert-success' role='alert'>".$_SESSION["success"]."</div>";
                unset($_SESSION["success"]);}
                ?>
    <div class="card-body">
        <h2 class="text-center">Liste des Clients</h2>

        <table id="demande" class="table table-striped table-bordered mt-3 mb-5" style="width:100%">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Profession</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Gender</th>
                <th scope="col" >Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $cpt=0; foreach ($variables["AFF"] as $AD) { $cpt++; ?>
                    <tr>
                        <td><?= $cpt ?></td>
                        <td><?= $AD["FirstName"] ?></td>
                        <td><?= $AD["LastName"] ?></td>
                        <td><?= $AD["Age"] ?></td>
                        <td><?= $AD["Profession"] ?></td>
                        <td><?= $AD["Email"] ?></td>
                        <td><?= $AD["Phone"] ?></td>
                        <td><?= $AD["Gender"] ?></td>
                        <td><a class="btn btn-sm btn-danger" href="index.php?action=supprimer_user&Username=<?php echo $AD['Username']; ?>" >supprimer</a></td>
                    </tr>
                <?php } ?>

            </tbody>



        </table>

    </div>
</div>

