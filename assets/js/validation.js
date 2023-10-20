$(document).ready(function () {
  $("#username").keyup(function () {
    var username = $(this).val().trim();

    if (username != "") {
      $.ajax({
        url: "private/validation.php",
        type: "post",
        data: { username: username },
        success: function (response) {
          $("#uname_response").html(response);
        },
      });
    } else {
      $("#uname_response").html("");
    }
  });

  $("#email").keyup(function () {
    var email = $(this).val().trim();

    if (email != "") {
      $.ajax({
        url: "private/validation.php",
        type: "post",
        data: { email: email },
        success: function (response) {
          $("#ename_response").html(response);
        },
      });
    } else {
      $("#ename_response").html("");
    }
  });

  $("#login-pass").keyup(function () {
    var password = $(this).val().trim();

    if (password != "") {
      $.ajax({
        url: "private/validation.php",
        type: "post",
        data: { password: password },
        success: function (response) {
          $("#pass_response").html(response);
        },
      });
    } else {
      $("#pass_response").html("");
    }
  });

  $("#btnSignup").click(function (e) {
    e.preventDefault();

    var user_name = $(this).closest(".login__form").find("#username").val();
    var user_email = $(this).closest(".login__form").find("#email").val();
    var user_password = $(this)
      .closest(".login__form")
      .find("#login-pass")
      .val();

    $.ajax({
      method: "POST",
      url: "private/validation.php",
      data: {
        user_name: user_name,
        user_email: user_email,
        user_password: user_password,
        scope: "signup",
      },
      success: function (response) {
        if (response == "verification") {
          window.location.href = "../verification.php";
        } else {
          $("#error_response").html(response);
        }
      },
    });
  });
});
