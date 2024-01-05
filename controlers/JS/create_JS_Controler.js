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
  const monthNames = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  var tdate = new Date();
  var dd = tdate.getDate(); //yields day
  var MM = tdate.getMonth(); //yields month
  MM = monthNames[MM];
  var yyyy = tdate.getFullYear(); //yields year
  var currentDate = MM + "-" + dd + "-" + yyyy;

  return currentDate;
}
var curentDate = GetTodayDate();
$("#tran_date").val(curentDate);
$(".result_selected_date").val(curentDate);
