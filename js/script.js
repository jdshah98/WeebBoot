function checkPasswordMatch() {
    var pass = $("#pw").val();
    var confirm = $("#cpw").val();
    if (password != confirmPassword)
        $("#message").html("Passwords do not match!");
    else
        $("#message").html("Passwords match.");
}

function checkMobile() {
    var mo = $("#mobile").val();
    if (mo.length!=10)
      $("#message").html("Invalid mobile number.");
}

$(document).ready(function () {
   $("#cpw").keyup(checkPasswordMatch);
   $("#mobile").keyup(checkMobile);
});

