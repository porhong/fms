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
