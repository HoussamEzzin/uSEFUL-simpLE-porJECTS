// Functions area

/**
 * function to switch from sign up and login
 */
const toggleLogin = () => {
  $.ajax({
    type: "GET",
    url: "login.html",

    dataType: "html",
    success: function (response) {
      $("#authentication").html(response);
    },
  });
};

/**
 * function to toggle from login to sign up
 */
const toggleSignup = () => {
  $.ajax({
    type: "GET",
    url: "signup.html",

    dataType: "html",
    success: function (response) {
      $("#authentication").html(response);
    },
  });
};

/**
 * @param str string
 * check password strength
 */
function checkPassword(str = "") {
  if (str.length < 6) {
    $("#password").css("background-color", "lightyellow");
    $("#signMeUp").attr("disabled", "true");
  } else $("#password").css("background-color", "#d6f8d6");

  let value = $("#repeatPassword").val();
  if (value !== "") {
    checkPasswordMatch(value);
  }
}

/**
 * check password match
 */
function checkPasswordMatch(str) {
  let password1 = $("#password").val();
  if (password1 != str) {
    $("#repeatPassword").css("background-color", "#ffcccb");
    $("#signMeUp").attr("disabled", "true");
  } else {
    $("#repeatPassword").css("background-color", "#d6f8d6");
    if (str.length > 5) {
      $("#signMeUp").removeAttr("disabled");
    }
  }
}
//
$(document).on("click", "#loginbtn", () => {
  toggleLogin();
});
//toggle to signyp
$(document).on("click", "#btnSignup", function () {
  // because newly aded elemts via ajax call can't be handled classiclay, so use on.()
  toggleSignup();
});

// submit signup date
$(document).on("click", "#signMeUp", () => {
  $("#authenticationForm").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "db/auth.php",
      data: $("#authenticationForm").serialize(),

      success: function (response) {
        console.log(response);
        if (response == "success") {
          $("#signMeUp").html("<h3 class='text-dark' >success! wait ... </h3>");
          setTimeout(toggleLogin, 1000);
        } else {
        }
      },
    });
  });
});
//here

// $(document).ready(function () {
//   submit();
// });

//
