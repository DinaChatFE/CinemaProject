$(document).ready(function () {
  let movie_id = new URLSearchParams(window.location.search).get("id");
  let customer_id = $("#get__uid").val();

  $("#submit_booking").click(function () {
    $.ajax({
      url: "model/postBooking.php",
      method: "POST",
      data: { movie_id, customer_id, seat_id },
      success: function (data) {
        console.log(data);
        if (data === "true") {
          location.href = "index.php";
        }
      },
    });
  });
});
