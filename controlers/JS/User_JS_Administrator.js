$(document).ready(function () {
  $(".btn_delete_user").click(function (e) {
    e.preventDefault();
    var userID = $(this).attr("data-user-id");
    var userName = $(this).attr("data-user-username");
    var str = `<h5>Do you want to delete user ${userName} ?</h5>`;
    $("#modal_body").html(str);
    $(".btn_delete").attr(
      "href",
      "../controlers/PHP/delete_user.php?user_deleted=" + userID
    );
  });
});
$(document).ready(function () {
  $(".btn_create_user").click(function (e) {
    $(".form-floating input").removeClass(
      "focus-ring focus-ring-danger input_error border-success border-danger"
    );
    $(".help-block-danger").empty();

    $("#cb_role option").removeAttr("selected");
    $("#txt_username").val("");
    $("#txt_password").val("");
    $("#txt_confirm_password").val("");
    $("#txt_first_name").val("");
    $("#txt_last_name").val("");
    $("#txt_email").val("");
    $("#txt_id").val("");
  });
});
// public varriable
var username;
var email;
//Get user to update form
$(document).ready(function () {
  $(".btn_update_user").click(function (e) {
    $(".form-floating input").removeClass(
      "focus-ring focus-ring-danger input_error border-success border-danger"
    );
    $(".help-block-danger").empty();
    $("#sw_status_update").attr("checked", "checked");
    $("#cb_role_update option").removeAttr("selected");
    $("#txt_username_update").val("");
    $("#txt_password_update").val("");
    $("#txt_confirm_password_update").val("");
    $("#txt_first_name_update").val("");
    $("#txt_last_name_update").val("");
    $("#txt_email_update").val("");
    $("#txt_id_update").val("");
    var userID = $(this).attr("data-user-id");
    $.ajax({
      url: `../views/local_api/getUser.php?id=${userID}`,
      type: "get",
      dataType: "JSON",
      success: function (response) {
        var len = response.length;
        for (var i = 0; i < len; i++) {
          var id = response[i].id;
          username = response[i].username;
          var password = response[i].password;
          email = response[i].email;
          var first_name = response[i].first_name;
          var last_name = response[i].last_name;
          var status = response[i].status;
          var role = response[i].role;
        }
        $("#txt_id_update").val(id);
        $("#txt_username_update").val(username);
        $("#txt_password_update").val(password);
        $("#txt_confirm_password_update").val(password);
        $("#txt_first_name_update").val(first_name);
        $("#txt_last_name_update").val(last_name);
        $("#txt_email_update").val(email);
        $(`#cb_role_update option[value="${role}"]`).attr("selected", true);
        if (status == 0) {
          $("#account_status div input#updat_status_2").prop("checked", true);
        } else {
          $("#account_status div input#updat_status_1").prop("checked", true);
        }
      },
    });
  });
});
//Create user form check
//Global Variable
var input_check = false;
//register form

// Password Rule
function verifyPassword() {
  var txt_pass1 = document.getElementById("txt_password");
  var txt_pass2 = document.getElementById("txt_confirm_password");
  var pass1 = document.getElementById("txt_password").value;
  var pass2 = document.getElementById("txt_confirm_password").value;
  // password lenght
  const password_help = document.getElementById("password_help");
  if (pass1.length < 6) {
    helpTextDanger(
      "block_txt_password",
      "txt_password",
      "help_txt_password",
      "Password must be more than 6 character"
    );
  } else {
    helpTextSuccess("txt_password", "help_txt_password");
  }

  if (pass2 != "") {
    if (pass2 != pass1 || pass1.length < 6) {
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
      helpTextDanger(
        "block_txt_confirm_password",
        "txt_confirm_password",
        "help_txt_confirm_password",
        "Confirm password not match"
      );
      formVrify();
    } else {
      txt_pass1.classList.remove("border-danger", "focus-ring-danger");
      txt_pass1.classList.add("border-success");
      txt_pass2.classList.remove("border-danger", "focus-ring-danger");
      txt_pass2.classList.add("border-success");
      helpTextSuccess("txt_confirm_password", "help_txt_confirm_password");
      formVrify();
    }
  }
}

// Password Rule
function verify_update_Password() {
  var txt_pass1 = document.getElementById("txt_password_update");
  var txt_pass2 = document.getElementById("txt_confirm_password_update");
  var pass1 = document.getElementById("txt_password_update").value;
  var pass2 = document.getElementById("txt_confirm_password_update").value;
  // password lenght
  const password_help = document.getElementById("password_help");
  if (pass1.length < 6) {
    helpTextDanger(
      "block_txt_password_update",
      "txt_password_update",
      "help_txt_password_update",
      "Password must be more than 6 character"
    );
  } else {
    helpTextSuccess("txt_password_update", "help_txt_password_update");
  }

  if (pass2 != "") {
    if (pass2 != pass1 || pass1.length < 6) {
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
      helpTextDanger(
        "block_txt_confirm_password_update",
        "txt_confirm_password_update",
        "help_txt_confirm_password_update",
        "Confirm password not match"
      );
      formVrify();
    } else {
      txt_pass1.classList.remove("border-danger", "focus-ring-danger");
      txt_pass1.classList.add("border-success");
      txt_pass2.classList.remove("border-danger", "focus-ring-danger");
      txt_pass2.classList.add("border-success");
      helpTextSuccess(
        "txt_confirm_password_update",
        "help_txt_confirm_password_update"
      );
      formVrify();
    }
  }
}

// Validate login
function loginInputVrify() {
  var danger = document.querySelector(".input_error");
  var username = document.getElementById("txt_username_email_update").value;
  var password = document.getElementById("txt_password_update").value;
  if (danger == null && username != "" && password != "") {
    btn_submit.disabled = false;
  } else {
    btn_submit.disabled = true;
  }
}
function loginVerify(txt_id, message) {
  var data = document.getElementById(txt_id).value;
  var ele = document.getElementById(txt_id);
  if (data == "") {
    ele.classList.add("border-danger", "focus-ring", "focus-ring-danger");
    helpTextDanger("block_" + txt_id, txt_id, "help_" + txt_id, message);
    loginInputVrify();
  } else {
    ele.classList.remove("border-danger", "focus-ring", "focus-ring-danger");
    ele.classList.add("border-success");
    helpTextSuccess(txt_id, "help_" + txt_id);
    loginInputVrify();
  }
}

// Validate register
function verifyRegisterInput(element, message) {
  var ele = document.getElementById(element);
  var ele_value = document.getElementById(element).value;
  if (ele_value == "") {
    ele.classList.add("border-danger", "focus-ring", "focus-ring-danger");
    helpTextDanger("block_" + element, element, "help_" + element, message);
    formVrify();
  } else {
    ele.classList.remove("border-danger", "focus-ring", "focus-ring-danger");
    ele.classList.add("border-success");
    helpTextSuccess(element, "help_" + element);
    formVrify();
  }
}
function formVrify() {
  var username = document.getElementById("txt_username").value;
  var password1 = document.getElementById("txt_password").value;
  var password2 = document.getElementById("txt_confirm_password").value;
  var first_name = document.getElementById("txt_first_name").value;
  var last_name = document.getElementById("txt_last_name").value;
  var email = document.getElementById("txt_email").value;
  var danger = document.querySelector(".input_error");
  if (
    danger == null &&
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
  updateFormVrify();
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
    formVrify();
  } else {
    ele.classList.remove("border-success", "focus-ring", "focus-ring-success");
    ele.classList.add("border-danger");
    helpTextDanger(
      "block_" + element,
      element,
      "help_" + element,
      "Email is not correct."
    );
    input_check = false;
    formVrify();
  }
}
// Mail empty Check
function checkEmptymail(element) {
  var ele = document.getElementById(element).value;
  if (ele == "") {
    helpTextDanger(
      "block_" + element,
      element,
      "help_" + element,
      "Email is required."
    );
    return;
  } else {
    helpTextSuccess(element, "help_" + element);
  }
}
//check from DB
function checkFromDB(txt_id, column) {
  var username = document.getElementById(txt_id).value;
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", `local_api/selectUsername.php?q=${username},${column}`);
  xhttp.send();
  xhttp.onload = function () {
    checkResult = this.responseText;
    if (username != "") {
      if (username == checkResult) {
        helpTextDanger(
          `block_${txt_id}`,
          txt_id,
          `help_${txt_id}`,
          `${column.toUpperCase()} : <b>${username}</b> was existed.`
        );
        formVrify();
      } else {
        if (username != "") {
          helpTextSuccess(txt_id, `help_${txt_id}`);
          formVrify();
        }
      }
    }
  };
}

// ------------------------------------------FUNCTION---------------------------------------------------------------

// Create element HTML:
function createHelper(text, id) {
  const help = document.createElement("div");
  help.innerHTML = `<small>${text}</small>`;
  help.className = "bt-1 ps-2 help-block-danger";
  help.id = `${id}`;
  return help;
}
// Remove element:
function removeElement(id) {
  var elem = document.getElementById(id);
  return elem.parentNode.removeChild(elem);
}

// Helper text input
function helpTextDanger(block_id, txt_id, help_id, text) {
  elem_Help = document.getElementById(help_id);
  txt_elem = document.getElementById(txt_id);
  if (elem_Help) {
    removeElement(help_id);
  }
  const para = createHelper(text, help_id);
  document.getElementById(block_id).appendChild(para);
  txt_elem.classList.add(
    "border-danger",
    "focus-ring",
    "focus-ring-danger",
    "input_error"
  );
}
function helpTextSuccess(txt_id, help_id) {
  elem_Help = document.getElementById(help_id);
  txt_elem = document.getElementById(txt_id);
  if (elem_Help) {
    removeElement(help_id);
    txt_elem.classList.remove(
      "border-danger",
      "focus-ring-danger",
      "input_error"
    );
    txt_elem.classList.add("border-success");
  }
}

// ------------------------------------------END FUNCTION---------------------------------------------------------------

// check iput form db for edit form
function checkFromDB_OnUpdate(txt_id, column) {
  var old_username = username;
  var new_username = document.getElementById(txt_id).value;
  var old_email = email;
  var new_email = document.getElementById(txt_id).value;
  if (new_username == old_username || new_email == old_email) {
    helpTextSuccess(txt_id, "help_" + txt_id);
  } else {
    checkFromDB(txt_id, column);
    updateFormVrify();
  }
}
//check error on update form
function updateFormVrify() {
  var danger = document.querySelector(".input_error");
  if (danger == null) {
    btn_update_user.disabled = false;
  } else {
    btn_update_user.disabled = true;
  }
}
