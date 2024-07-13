$(document).ready(function () {
  $("#email,#country,#class").focus(function () {
    $(this).css("background-color", "lime");
  });

  $("#email,#country,#class").blur(function () {
    $(this).css("background", "");
  });

  $("#country").change(function () {
    var a = $(this).val();
    $("#test").html(a);
  });

  $("#email", "#class").select(function () {
    $(this).css("background-color", "yellow");
  });

  $("#sform").submit(function () {
    alert("Form submitted");
  });
});
