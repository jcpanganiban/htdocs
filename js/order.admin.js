// function pending() {
//   console.log(document.getElementById("pending").parentNode.parentNode);
// }
function test() {
  $.ajax({
    url: "echo.php",
    success: function (result) {
      $("div").text(result);
    },
  });
}
