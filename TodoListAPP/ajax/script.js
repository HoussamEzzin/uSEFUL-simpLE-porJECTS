$("#signin").click(() => {
  $("#h3").html("wait...");
  $.ajax({
    type: "GET",
    url: "db.php",
    dataType: "html",
    success: function (data) {
      setTimeout(() => {
        $("#h3").html(data);
      }, 1000);
    },
  });
});
