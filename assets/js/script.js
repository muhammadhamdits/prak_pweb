$(document).ready(function () {
  $("#login").on("click", function () {
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
  $('#praktikum').DataTable();
});