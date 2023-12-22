const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  },
});

function alert(param, message_success, message_failed) {
  var alert_status = getUrlParameter(param);
  if (alert_status == 1) {
    Toast.fire({
      icon: "success",
      title: message_success,
    });
  } else if (alert_status == 2) {
    Toast.fire({
      icon: "error",
      title: message_failed,
    });
  }
}
function alert_login(param, message_success, message_failed) {
  var alert_status = getUrlParameter(param);
  if (alert_status == 1) {
    Toast.fire({
      icon: "error",
      title: message_success,
    });
  } else if (alert_status == 2) {
    Toast.fire({
      icon: "error",
      title: message_failed,
    });
  }
}

var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
    sURLVariables = sPageURL.split("&"),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split("=");

    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined
        ? true
        : decodeURIComponent(sParameterName[1]);
    }
  }
  return false;
};
