$("#expend").click(function () {
  $(".expend").addClass("bg-color-primary text-color-white");
  $(".expend").removeClass("text-color-primary");
  $(".income").addClass("text-color-primary");
  $(".income").removeClass("bg-color-primary text-color-white");
});
$("#income").click(function () {
  $(".income").addClass("bg-color-primary text-color-white");
  $(".income").removeClass("text-color-primary");
  $(".expend").addClass("text-color-primary");
  $(".expend").removeClass("bg-color-primary text-color-white");
});

//btn choose currency handler
$(".usd").click(function () {
  $(".symbol span").text("$");
  $(".symbol span").addClass("fs-2");
  $(".symbol span").removeClass("fs-1");
  $(".reil").removeClass(
    "btn col-5 card text-center p-2 bg-color-primary item-card-md"
  );
  $(".usd").addClass(
    "btn col-5 card text-center p-2 bg-color-primary item-card-md"
  );
  $(".reil").addClass(
    "btn col-5 card text-center p-2 border border-primary border-2 item-card-md"
  );
  $(".reil span").removeClass("text-color-white");
  $(".usd span").addClass("text-color-white");
  $(".reil span").addClass("text-color-primary");
});
$(".reil").click(function () {
  $(".symbol span").text("៛");
  $(".symbol span").addClass("fs-1");
  $(".symbol span").removeClass("fs-2");
  $(".usd").removeClass(
    "btn col-5 card text-center p-2 bg-color-primary item-card-md"
  );
  $(".reil").addClass(
    "btn col-5 card text-center p-2 bg-color-primary item-card-md"
  );
  $(".usd").addClass(
    "btn col-5 card text-center p-2 border border-primary border-2 item-card-md"
  );

  $(".usd span").removeClass("text-color-white");
  $(".reil span").addClass("text-color-white");
  $(".usd span").addClass("text-color-primary");
});

//select date
$("#btn_select_date").click(function () {
  var selected_date = $(".result_selected_date").val();
  $("#tran_date").val(selected_date);
});
//select date on load
function GetTodayDate() {
  var tdate = new Date();
  var dd = tdate.getDate(); //yields day
  var MM = tdate.getMonth() + 1; //yields month
  MM = String(MM).padStart(2, "0");
  dd = String(dd).padStart(2, "0");
  var yyyy = tdate.getFullYear(); //yields year
  var currentDate = yyyy + "-" + MM + "-" + dd;

  return currentDate;
}
var curentDate = GetTodayDate();
$("#tran_date").val(curentDate);
$(".result_selected_date").val(curentDate);

// btn add new tran type
$("#btn_new_type").click(function () {
  $("#txt_new_type").toggleClass("d-none");
});

// insert type tran
$(document).on("submit", "#type_Form", function (e) {
  e.preventDefault();
  $.ajax({
    method: "POST",
    url: "../views/local_api/create_tran_type.php",
    data: $(this).serialize(),
    success: function (data) {
      var name = $("#txt_new_type").find("input").val();
      $("#txt_new_type").find("input").val("");
      $("#txt_new_type").addClass("d-none");
      var html = `<div class="col-12 col-lg-4 d-flex justify-content-center align-items-center btn_tran_type">
      <p id="${name}" class="text-center mb-2 mb-lg-3 p-3 text-color-primary btn border border-primary w-100 h1 border-2 fw-bold " data-bs-dismiss="modal">${name}</p>
  </div>`;
      $(".type_body").append(html);
    },
  });
});

//type tran button click handler
$(`#Cash`).addClass(
  "p-3 text-color-white bg-color-primary btn w-100 h1 fw-bold"
);
var previous_button_tran_type = "Cash";

$("#modal_type").on("click", ".btn_tran_type", function (e) {
  var idClicked = e.target.id;
  $(".txt_type").val(idClicked);
  var val_tran_type = $(".txt_type").val();
  if (val_tran_type == previous_button_tran_type || val_tran_type == "") {
    $(".txt_type").val(previous_button_tran_type);
    return;
  } else {
    $(`#${previous_button_tran_type}`).removeClass(
      "p-3 text-color-white bg-color-primary btn w-100 h1 fw-bold"
    );
    $(`#${previous_button_tran_type}`).addClass(
      "p-3 text-color-primary btn border border-2 border-primary w-100 h1 fw-bold"
    );
    previous_button_tran_type = val_tran_type;
    $(`#${val_tran_type}`).addClass(
      "p-3 text-color-white bg-color-primary btn w-100 h1 fw-bold"
    );
  }
});

//btn edit
$(".modal-header").on("click", "#btn_edit_type", function (e) {
  $(".container #form-create").addClass("d-none");
  $(".container #edit-tran-type").removeClass("d-none").fadeIn();
  $("#page_title").text("Edit Transaction");
  $(`<a id="btn_back" d-flex" href="#">
  <i class="uil uil-arrow-left lg-icon-size ms-1 text-color-primary"></i>
</a>`).insertBefore("h2.card-title");
});

$(".navbar-brand").on("click", "#btn_back", function (e) {
  $(".container #form-create").removeClass("d-none");
  $(".container #edit-tran-type").addClass("d-none");
  $("#page_title").text("Transaction");
  $("#btn_back").remove("#btn_back");
});

//--------------------------------------------------------------------------

//Amount input validation
$("#btn_create_tran_record").click(function () {
  if ($(".symbol span").text() == "៛" && $(".txt_amount").val() <= 99) {
    $(".txt_amount").removeClass("text-color-primary");
    $(".txt_amount").addClass(
      "border border-danger border-1 text-color-danger"
    );
    $(".txt_amount").focus();
    $(".symbol span").removeClass("text-color-primary");
    $(".symbol i").removeClass("text-color-primary");
    $(".symbol span").addClass("text-color-danger");
    $(".symbol i").addClass("text-color-danger");
  } else {
    if ($(".txt_amount").val() == "") {
      $(".txt_amount").removeClass("text-color-primary");
      $(".txt_amount").addClass(
        "border border-danger border-1 text-color-danger"
      );
      $(".txt_amount").focus();
      $(".symbol span").removeClass("text-color-primary");
      $(".symbol i").removeClass("text-color-primary");
      $(".symbol span").addClass("text-color-danger");
      $(".symbol i").addClass("text-color-danger");
    } else {
      $(".txt_amount").removeClass(
        "border border-danger border-1 text-color-danger"
      );
      $(".txt_amount").addClass("text-color-primary");
      $(".symbol span").removeClass("text-color-danger");
      $(".symbol i").removeClass("text-color-danger");
      $(".symbol span").addClass("text-color-primary");
      $(".symbol i").addClass("text-color-primary");
    }
  }
});
$(".txt_amount").keyup(function () {
  $(".txt_amount").removeClass(
    "border border-danger border-1 text-color-danger"
  );
  $(".txt_amount").addClass("text-color-primary"), 900, "swing";
  $(".symbol span").removeClass("text-color-danger"), 900, "swing";
  $(".symbol i").removeClass("text-color-danger"), 900, "swing";
  $(".symbol span").addClass("text-color-primary"), 900, "swing";
  $(".symbol i").addClass("text-color-primary"), 900, "swing";
});
