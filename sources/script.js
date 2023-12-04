//Global Variable
var input_check = false;
//register form

// Password Rule
function verifyPassword() {
  var txt_pass1 = document.getElementById("txt_password");
  var txt_pass2 = document.getElementById("txt_confirm_password");
  var helper_pass_con = document.getElementById("pass_confirm_error");
  var btn_submit = document.getElementById("btn_submit");
  var pass1 = document.getElementById("txt_password").value;
  var pass2 = document.getElementById("txt_confirm_password").value;
  if (pass2 != "") {
    if (pass2 != pass1) {
      txt_pass1.classList.add(
        "border-danger",
        "focus-ring",
        "focus-ring-danger"
      );
      txt_pass2.classList.add(
        "border-danger",
        "focus-ring",
        "focus-ring-danger"
      );
      helper_pass_con.classList.remove("invisible");
      helper_pass_con.classList.add("mb-3");
      formVrify(false);
    } else {
      txt_pass1.classList.remove("border-danger", "focus-ring-danger");
      txt_pass1.classList.add("border-success");
      txt_pass2.classList.remove("border-danger", "focus-ring-danger");
      txt_pass2.classList.add("border-success");
      helper_pass_con.classList.add("invisible");
      helper_pass_con.classList.remove("mb-3");
      formVrify(true);
    }
  }
}

// input Check
function verifyInput(element) {
  var ele = document.getElementById(element);
  var ele_value = document.getElementById(element).value;

  if (ele_value == "") {
    ele.classList.add("border-danger", "focus-ring", "focus-ring-danger");
    formVrify(false);
  } else {
    ele.classList.remove("border-danger", "focus-ring", "focus-ring-danger");
    ele.classList.add("border-success");
    formVrify(true);
  }
}

// mail Check
function verifyMail(element) {
  var ele = document.getElementById(element);
  var ele_value = document.getElementById(element).value;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (ele_value.match(mailformat)) {
    ele.classList.remove("border-danger", "focus-ring", "focus-ring-danger");
    ele.classList.add("border-success");
    input_check = true;
    formVrify(true);
  } else {
    ele.classList.add("border-danger", "focus-ring", "focus-ring-danger");
    formVrify(false);
  }
}
// Validate register
function formVrify(status) {
  var username = document.getElementById("txt_username").value;
  var password1 = document.getElementById("txt_password").value;
  var password2 = document.getElementById("txt_confirm_password").value;
  var first_name = document.getElementById("txt_first_name").value;
  var last_name = document.getElementById("txt_last_name").value;
  var email = document.getElementById("txt_email").value;
  if (
    status == true &&
    username != "" &&
    password1 != "" &&
    password2 != "" &&
    first_name != "" &&
    last_name != "" &&
    email != ""
  ) {
    btn_submit.disabled = false;
  } else {
    btn_submit.disabled = true;
  }
}
