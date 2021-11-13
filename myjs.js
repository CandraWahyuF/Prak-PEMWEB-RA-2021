$(document).ready(function () {
  show();

  function show() {
    $.ajax({
      type: "GET",
      url: "show.php",
      success: function (data) {
        $("#tampil_data").html(data);
      },
    });
  }

  // $("#btn_tampil").click(function () {
  //   alert("Data Ditampilkan");
  //   show();
  // });

  $("#btn_simpan").click(function () {
    var data = $("#form_mhs").serialize();
    $.ajax({
      type: "POST",
      url: "create.php",
      data: data,
      cache: false,
      success: function (data) {
        alert("Data telah Ditambahkan");
        show();
      },
    });
  });

  $("#tampil_data").on("click", "#btn_edit", function () {
    var id = $(this).attr("value");
    $.ajax({
      type: "GET",
      url: "updateData.php",
      data: { id: id },
      success: function (data) {
        $("#tampil_data").html(data);
      },
    });
  });

  $("#tampil_data").on("submit", "#form_mhs_update", function () {
    var dataUpdate = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "update.php",
      data: dataUpdate,
      cache: false,
      success: function (data) {
        alert("Data Diupdate");
        $("#tampil_data").html(data);
      },
    });
  });

  $("#tampil_data").on("click", "#btn_hapus", function () {
    var deleteData = $(this).attr("value");
    $.ajax({
      type: "POST",
      url: "delete.php",
      data: { deleteData: deleteData },
      success: function (data) {
        alert("Data telag Dihapus");
        show();
      },
    });
  });
});
