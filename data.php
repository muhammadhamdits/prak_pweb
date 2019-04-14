<?php
require_once("_header.php");
?>

<!-- BEGIN Data Content -->

<div class="col-9 d-flex align-items-stretch">
  <div class="card text-white bg-info" style="width:100%;">
    <div class="card-header">Main Content</div>
    <div class="card-body table-responsive">
      <div class="row">
        <div class="col-8 mr-2"></div>
        <div class="col-3 mb-3 ml-5">
          <button class="btn btn-info btn-xs form-control"><i class="material-icons">add</i><p>Tambah Data</p></button>
        </div>
      </div>
      <table class="table table-striped table-borderless table-hover" id="praktikum">
        <thead class="text-center text-white">
          <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Nama Praktikum</th>
              <th>Jumlah Praktikan</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 
            include("data_praktikum.php");
        ?>
        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
  </div>
</div>
</div>

<!-- END Data Content -->

<?php
require_once("_footer.php");
?>