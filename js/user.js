$('.btn-login').on('click', function () {
    $('#login-submit').on('click', function () {
        email = $('#loginemail').val();
        pass = $('#loginpw').val();
        if (email.length != 0 && pass.length != 0) {
            $.ajax({
                url: './php/login.php',
                type: 'get',
                data: {
                    "email": email,
                    "pass": pass
                },
                success: function (data) {
                    $('#id01').css('display', 'none');
                    getCookie();
                },
                error: function (data) {
                    alert(data);
                }
            });
        } else {
            $('#log-message').html('Fill Login Credentials');
        }
    });

    $('#login-reset').on('click', function () {
        $('#loginemail').val('');
        $('#loginpw').val('');
    });
});

$(document).ready(function () {
    getCookie();
});

function getCookie() {
    var cookiearray = decodeURIComponent(document.cookie).split(';');
    for (var i = 0; i < cookiearray.length; i++) {
        if (cookiearray[i].indexOf("user") >= 0) {
            var cuser = cookiearray[i].split('__');
            console.log(cuser);
            $('.btn-dynamic').html('<button class="btn btn-outline-success btn-user" type="submit"></button><button class="btn btn-outline-primary btn-logout" id="logout" type="submit">Log out</button>');
            $('.btn-user').text(cuser[1]);
            $('#logout').on('click', function () {
                delcookie(cuser[1]);
            });
        }
    }
}

function delcookie(cemail) {
    $.ajax({
        url: './php/cookie.php',
        success: function (params) {
            if (parseInt(params) == 200) {
                $('.btn-dynamic').html('<button class="btn btn-outline-success btn-login" onclick = "document.getElementById(' + 'id01' + ').style.display=' + 'block' + ',document.getElementById(' + 'id02' + ').style.display=' + 'none' + '"type = "submit" > Login</button ><button class="btn btn-outline-primary btn-signup" onclick="document.getElementById(' + 'id02' + ').style.display=' + 'block' + ',document.getElementById(' + 'id01' + ').style.display=' + 'none' + '"  type="submit">Sign UP</button>');
                $('.btn-login').on('click', function () {
                    $('#login-submit').on('click', function () {
                        email = $('#loginemail').val();
                        pass = $('#loginpw').val();
                        if (email.length != 0 && pass.length != 0) {
                            $.ajax({
                                url: './php/login.php',
                                type: 'get',
                                data: {
                                    "email": email,
                                    "pass": pass
                                },
                                success: function (data) {
                                    $('#id01').css('display', 'none');
                                    getCookie();
                                },
                                error: function (data) {
                                    alert(data);
                                }
                            });
                        } else {
                            $('#log-message').html('Fill Login Credentials');
                        }
                    });

                    $('#login-reset').on('click', function () {
                        $('#loginemail').val('');
                        $('#loginpw').val('');
                    });
                });
            }
        }
    });
}

$('.btn-signup').on('click', function () {
    $('#signup-submit').on('click', function () {
        name = $('#name').val();
        email = $('#email').val();
        mobile = $('#mobile').val();
        pass = $('#pw').val();
        cpass = $('#cpw').val();
        if (name.length == 0) {
            $('#name-val').html('<p class="error">Name is required</p>');
        } else if (email.length == 0) {
            $('#em-val').html('<p class="error">Email is required</p>');
        } else if (!IsEmail(email)) {
            $('#em-val').html('<p class="error">Enter valid Email Id</p>');
        } else if (mobile.length == 0) {
            $('#mb-val').html('<p class="error">Mobile is required</p>');
        } else if (!IsMobile(mobile)) {
            $('#mb-val').html('<p class="error">Mobile is not valid</p>');
        } else if (pass.length < 6) {
            $('#pw-val').html('<p class="error">Password should be at least 6 characters long</p>');
        } else if (cpass.localeCompare(pass) != 0) {
            $('#cpw-val').html('<p class="error">Passwords not Match</p>');
        } else {
            $.ajax({
                url: './php/register.php',
                type: 'get',
                data: {
                    'type': 'customer',
                    "name": name,
                    "mobile": mobile,
                    "email": email,
                    "password": pass
                }, success: function (data) {
                    console.log(data);
                    if (data.localeCompare("200") == 0) {
                        $('#id02').css('display', 'none');
                        getCookie();
                    } else if (data.localeCompare("401")) {
                        $('#cpw-val').html('User Account already Exists');
                    } else {
                        console.log(data);
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    });

    function IsEmail(email) {
        var reg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (reg.test(email)) {
            return true;
        } else {
            return false;
        }
    }

    function IsMobile(mobile) {
        var reg = /^\d{10}$/;
        if (reg.test(mobile)) {
            return true;
        } else {
            return false;
        }
    }

    $('#signup-reset').on('click', function () {
        $('#name').val('');
        $('#email').val('');
        $('#mobile').val('');
        $('#pw').val('');
        $('#cpw').val('');
    });
});