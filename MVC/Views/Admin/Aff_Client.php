<div class="container">
    <h2 class="text-center">---- Liste des Clients ----</h2>
</div>
<!--script jquery datatables-->
<div class="card border-left-secondary h-100 mx-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                            aria-controls="example" class="form-select form-select-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries</label></div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                            class="form-control form-control-sm" placeholder="" aria-controls="example"></label>
                </div>
            </div>
        </div>
        <table id="myTable" class="table table-striped table-bordered mt-3" style="width:100%">
            <thead>
                <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Age</th>
        <th scope="col">Profession</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Gender</th>
      </tr>
    </thead>

  <tbody>
     <?php foreach($variables["AFF"] as $AD){?>
              <tr>
                 <td><?= $AD["FirstName"] ?></td>
                 <td><?= $AD["LastName"] ?></td>
                 <td><?= $AD["Age"] ?></td>
                 <td><?= $AD["Profession"] ?></td>
                 <td><?= $AD["Email"] ?></td>
                 <td><?= $AD["Phone"] ?></td>
                 <td><?= $AD["Gender"] ?></td>
                       
             </tr>
             <?php } ?>

            </tbody>



        </table>

    </div>
</div>