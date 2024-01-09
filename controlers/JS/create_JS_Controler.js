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
  $(".reil").removeClass(
    "btn col-5 card text-center p-2 text-color-white bg-color-primary item-card-md"
  );
  $(".usd").addClass(
    "btn col-5 card text-center p-2 text-color-white bg-color-primary item-card-md"
  );
  $(".reil").addClass(
    "btn col-5 card text-center p-2 text-color-primary border border-primary border-2 item-card-md"
  );
});
$(".reil").click(function () {
  $(".symbol span").text("៛");
  $(".usd").removeClass(
    "btn col-5 card text-center p-2 text-color-white bg-color-primary item-card-md"
  );
  $(".reil").addClass(
    "btn col-5 card text-center p-2 text-color-white bg-color-primary item-card-md"
  );
  $(".usd").addClass(
    "btn col-5 card text-center p-2 text-color-primary border border-primary border-2 item-card-md"
  );
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

// get type tran
$(document).ready(function () {
  $(".choose_type").click(function (e) {
    $(".data_area").empty();
    $.ajax({
      url: `../views/local_api/get_tran_type.php`,
      type: "get",
      dataType: "JSON",
      success: function (response) {
        var len = response.length;
        for (var i = 0; i < len; i++) {
          var id = response[i].id;
          var name = response[i].name;
          $(".data_area")
            .append(
              `
            <div id="tran_type" class="col-4 text-center mb-3 d-flex justify-content-center align-items-center">
            <p id="${name}" class="p-3 text-color-primary btn border border-primary w-100 h1" data-bs-dismiss="modal" value="${name}">${name}</p>
            </div>
            `
            )
            .click(function () {
              var val = $(`#tran_type p`).text();
              console.log(val);
            });
        }
      },
    });
  });
});

//type tran button click handler
$(`#Cash`).addClass(
  "p-3 text-color-white bg-color-primary btn w-100 h1 fw-bold"
);
var previous_button_tran_type = "Cash";
$(".btn_tran_type").click(function (e) {
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
