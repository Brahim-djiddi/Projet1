<div class="container">
    <h2 class="text-center">---- Demande D'etudes ----</h2>
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
        <th scope="col">Etudiants</th>
        <th scope="col">Type de demande</th>
        <th scope="col">Date de demande</th>
        <th scope="col">telecharger la demande</th>
      </tr>
    </thead>

  <tbody>
     <?php foreach($variables["AFF"] as $AD){?>
              <tr>
                 <td><?= $AD["Owner"] ?></td>
                 <td><?= $AD["Type"] ?></td>
                 <td><?= $AD["Date_Ajout"] ?></td>
                 <td><a class="btn btn-sm btn-success" href="PDFs/completed/this_year/<?php echo $AD['Link'];?>" download>telecharger ici</a></td>
                 
                

                 
             </tr>
             <?php } ?>

            </tbody>



        </table>

    </div>
</div>