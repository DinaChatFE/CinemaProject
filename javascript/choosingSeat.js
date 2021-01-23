let seat_id = $("#get__id").val();

function getSeatID(id) {
  seat_id = id;
}
function getSeatName(name) {
  $("#get__name").val(name);
}
$("#submit_seat").click(function () {
  var name = $("#get__name").val();
  $("#p__id").html("You choose: " + name);
  $("#exampleModal").modal("toggle");
});
