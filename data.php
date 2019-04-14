<?php
require_once("_header.php");
if(!isset($_SESSION['username'])){ ?>
  <script>
    // swal("Error", "Anda belum login!", "warning");
    swal({
      title: 'Error',
      text: "Anda belum login",
      type: 'error',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      window.location="index.php";
    })
    // window.location="index.php";
  </script>
<?php
die();
}
?>

<!-- BEGIN Data Content -->

<div class="col-9 d-flex align-items-stretch">
  <div class="card text-white bg-info" style="width:100%;">
    <div class="card-header">Main Content</div>
    <div class="card-body table-responsive">
      <div class="row">
        <div class="col-8 mr-2"></div>
        <div class="col-3 mb-3 ml-5">
          <button class="btn btn-info btn-xs form-control" data-toggle="modal" data-target="#tambahData"><i class="material-icons">add</i><p>Tambah Data</p></button>
        </div>
      </div>
      <table class="table table-striped table-borderless table-hover text-center text-white" id="praktikum">
        <thead>
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