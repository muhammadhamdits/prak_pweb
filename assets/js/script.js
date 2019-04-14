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

  $(document).on("click", "#edtprak", function () {
    var kode = $(this).data('kode');
    var nama = $(this).data('nama');
    var jumlah = $(this).data('jumlah');
    $("#editData .modal-body #kode1").val(kode);
    $("#editData .modal-footer #kdlm").val(kode);
    $("#editData .modal-body #nama1").val(nama);
    $("#editData .modal-body #jumlah1").val(jumlah);
  });

  $("#edit").on("click", function (event) {
    event.preventDefault();
    if ($("#kode1").val() == "" || $("#nama1").val() == "" || $("#jumlah1").val() == "") {
      swal("Error", "Data belum lengkap!", "warning");
    } else {
      $.ajax({
        url: "proses.php",
        method: "POST",
        data: $("#formEditData").serialize(),
        success: function (data) {
          $("#formEditData")[0].reset();
          $("#editData").modal("hide");
          console.log(data);
          if (data == "gagal") {
            swal("Error", "Data gagal diperbaharui!", "error");
          } else {
            swal("Success", "Data sukses diperbaharui!", "success");
            $("#praktikum tbody").html("");
            $("#praktikum tbody").load("data_praktikum.php");
          }
        }
      });
    }
  });

  $('.swalconf').on('click', function (e) {
    e.preventDefault();
    swal({
      title: "Are you sure?",
      text: "Anda tidak akan dapat mengembalikan data yang sudah terhapus!",
      icon: "warning",
      showCancelButton: true,
      buttons: {
        cancel: {
          text: "No, batalkan saja",
          value: null,
          visible: true,
          className: "btn-warning",
          closeModal: false,
        },
        confirm: {
          text: "Yes, hapus data ini!",
          value: true,
          visible: true,
          className: "btn-primary",
          closeModal: false
        }
      }
    }).then(isConfirm => {
      if (isConfirm) {
        var kode = $(this).data('kode');
        $.ajax({
          method: 'POST',
          url: 'delete.php',
          data: {
            'kode': kode
          },
          success: function (data) {
            if (data == "gagal") {
              swal("Failed", "Data gagal dihapus", "error");
            } else {
              swal("Deleted!", "Data yang anda pilih sudah berhasil dihapus", "success");
              $("#praktikum tbody").html("");
              $("#praktikum tbody").load("data_praktikum.php");
            }
          }
        });
      } else {
        swal("Cancelled", "Anda membatalkannya", "error");
      }
    });
  });

  $('#praktikum').DataTable();
});