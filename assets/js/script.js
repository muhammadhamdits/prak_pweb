$(document).ready(function () {
  $("#login").on("click", function (event) {
    event.preventDefault();
    // swal("Error", "Data belum lengkap/tidak valid!", "warning");
    if ($("#username").val() == "" || $("#password").val() == "") {
      swal("Error", "Data login belum lengkap!", "warning");
    } else {
      $.ajax({
        url: "proses.php",
        method: "POST",
        data: $("#formLogin").serialize(),
        success: function (data) {
          $("#formLogin")[0].reset();
          if (data == "gagal") {
            swal("Error", "Login gagal! Username/Password salah!", "error");
          }
          $("#leftNav").load(location.href + " #leftNav>*", "");
        }
      });
    }
  });

  $("#tambah").on("click", function (event) {
    event.preventDefault();
    if ($("#kode").val() == "" || $("#nama").val() == "" || $("#jumlah").val() == "") {
      swal("Error", "Data belum lengkap!", "warning");
    } else {
      $.ajax({
        url: "proses.php",
        method: "POST",
        data: $("#formTambahData").serialize(),
        success: function (data) {
          $("#formTambahData")[0].reset();
          $("#tambahData").modal("hide");
          if (data == "gagal") {
            swal("Error", "Data gagal ditambahkan!", "error");
          } else {
            swal("Success", "Data sukses ditambahkan!", "success");
            $("#praktikum tbody").html("");
            $("#praktikum tbody").load("data_praktikum.php");
          }
        }
      });
    }
  });

  $('#praktikum').DataTable();
});