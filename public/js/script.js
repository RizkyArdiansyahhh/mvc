$(function () {
  $(".btn-add").on("click", function () {
    $(".modal-title").html("add Student");
    $(".modal-footer button[type='submit']").html("add");
    $(".modal form").attr(
      "action",
      "http://localhost/mvc/public/mahasiswa/insert"
    );

    $("#name").val("");
    $("#email").val("");
    $("#nim").val("");
    $("#major")[0].selectedIndex = 0;
  });

  $(".btn-edit").on("click", function () {
    $(".modal-title").html("Edit Student");
    $(".modal-footer button[type='submit']").html("edit");
    $(".modal form").attr(
      "action",
      "http://localhost/mvc/public/mahasiswa/edit"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/mvc/public/mahasiswa/getUbah",
      data: { id: id },
      type: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#name").val(data.name);
        $("#email").val(data.email);
        $("#nim").val(data.nim);
        $("#major").val(data.major);
        $("#id").val(data.id);
      },
    });
  });
});
