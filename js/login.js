$('#login-submit').on('click', function () {
    email = $('#loginemail').val();
    pass = $('#loginpassword').val();
    $.ajax({
        url: './php/login.php',
        type: 'get',
        data: {
            "email": email,
            "pass": pass
        },
        success: function (data) {
            console.log(data);
        },
        error: function (data) {
            alert(data);
        }
    });
});