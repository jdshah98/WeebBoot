$('#submit').on('click', function () {
    if(myFunction()){
        name = $('#name').val();
        email = $('#email').val();
        mobile = $('#mobile').val();
        pass = $('#pw').val();
        cpass = $('#cpw').val();
        if (pass == cpass) {
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
                    $('#message').html(data); clearAll();
                },
                error: function (data) {
                    alert(data);
                }
            });
        }
    }else{
        console.log("Empty");
    }
});
$(document).ready(function () {
    // $('.modal').css('display', 'inline-block');
});

function clearAll(){
    $('#name').val('');
    $('#email').val('');
    $('#mobile').val('');
    $('#pw').val('');
    $('#cpw').val('');
}
function myFunction() {
    return true;
}