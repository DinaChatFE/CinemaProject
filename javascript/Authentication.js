$(document).ready(function () {
  $("#submit_sign_up").click(function (e) {
    e.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();
    var gender = $("#gender").val();
    var address = $("#address").val();
    var name = $("#name").val();
    var phonenumber = $("#phonenumber").val();

    $.ajax({
      url: "model/model_sign_up.php",
      method: "POST",
      data: { name, email, password, address, phonenumber, gender },
      success: function (data) {
        $("body").append(data);
      },
    });
  });
  $("#submit_log_in").click(function (e) {
    e.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();

    console.log(email, password);
    $.ajax({
      url: "model/model_log_in.php",
      method: "POST",
      data: { email, password },
      success: function (data) {
        $("body").append(data);
      },
    });
  });
});
