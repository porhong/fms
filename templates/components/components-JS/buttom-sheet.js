function showBottomSheet() {
  if (
    document
      .getElementById("bottomSheet")
      .classList.contains("bottomSheet--offScreen")
  ) {
    document
      .getElementById("bottomSheet")
      .classList.replace("bottomSheet--offScreen", "bottomSheet--onScreen");
  } else {
    document
      .getElementById("bottomSheet")
      .classList.replace("bottomSheet--onScreen", "bottomSheet--offScreen");
  }
}

function showToast() {
  if (
    document
      .getElementById("bottomSheet")
      .classList.contains("bottomSheet--offScreen")
  ) {
    document
      .getElementById("bottomSheet")
      .classList.replace("bottomSheet--offScreen", "showToast");
    document.getElementById("bottomSheet__headerID").textContent =
      "Test Update";
  } else {
    document
      .getElementById("bottomSheet")
      .classList.replace("bottomSheet--onScreen", "showToast");
    var today = new Date();
    var nextweek = new Date(
      today.getFullYear(),
      today.getMonth(),
      today.getDate() + 7
    ).toDateString();
    document.getElementById("bottomSheet__headerID").textContent =
      "Reminder set for " + nextweek;
    document
      .getElementById("bottomSheet__headerID")
      .classList.add("largemargins");
    document
      .getElementById("cancelButton")
      .classList.replace("hidden", "visible");
  }
}
