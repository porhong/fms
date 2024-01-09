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

$(".usd").click(function () {
  $(".symbol span").text("$");
});
$(".reil").click(function () {
  $(".symbol span").text("៛");
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

$("#btn_new_type").click(function () {
  $("#txt_new_type").toggleClass("d-none");
});
