$(document).ready(function () {
  $("#log_out").click(function (e) {
    e.preventDefault();
    let confirm_logOut = confirm("Are you sure to loged your account? ");

    if (confirm_logOut == true) {
      $.ajax({
        url: "model/log_out.php",
        method: "POST",
        data: { status: status },
        success: function (e) {
          console.log(e);
          location.href = "log_in.php";
        },
      });
    }
  });
});
