$(document).ready(function () {
  $(".btn_delete_user").click(function (e) {
    e.preventDefault();
    var userID = $(this).attr("data-user-id");
    var userName = $(this).attr("data-user-username");
    console.log(userName + " deleted " + userID);

    var str =
      "<div class='d-flex'>" +
      "<h5>Do you want to delete user:  </h5>" +
      "<h5 style='font-weight: 700; padding-left:0.5rem;'>" +
      userName +
      "</h5></div>";
    $("#modal_body").html(str);
  });
});
