function itemClick(e) {
    var classes = e.className.split(" ");
    // console.log($('.item-div-'+classes[2]));    
    $.ajax({
        url: './php/fooddetails.php',
        data: { 'fid': classes[2] },
        type: 'get',
        success: function (params) {
            food_item = JSON.parse(params);
            // console.log(food_item);
            document.getElementById('id03').style.display = 'block';
            document.getElementById('id02').style.display = 'none';
            $('.cart-item-name').html(food_item['name']);
            $('.cart-item-discription').html(food_item['ingredients']);
            $('.cart-item-price').html(food_item['cost']);
            $('.cart-item-img img').attr('src', './' + food_item['url']);
            $('.btn-block').attr('id', food_item['fid']);
        },

        error: function (params) {
        }
    });
    console.log(classes[2]);
}
$('.btn-cart').on('click',function(){
    var on = 0;
    $.ajax({
        url: './php/sessionStatus.php',
        success: function (code) {
            if (parseInt(code) == 200) {
                window.location.href = "cart.html";
            }else
            {
                alert('Login First');
            }
        },
        error:function(error){
            alert(error);
        }
    });
   
});

function cartItemCheckoutClick(e) {
    var on = 0;
    $.ajax({
        url: './php/sessionStatus.php',
        success: function (code) {
            on = parseInt(code);
            if (on == 200) {
                var id = $(this).attr('id');
                // var classes=e.className.split(" ");
                console.log("item-id : "+e.id);
                $.ajax({
                    url: './php/addtocart.php',
                    data: {
                        'fid': e.id,
                        'noofitem': $('.cart-noof-item').val()
                    },
                    type: 'get',
                    success: function (params) {
                        console.log(params);
                        window.location.href = "cart.html";
                    },
                    error: function (params) {
                        alert(params)
                    }
                });
            } else {
                alert('Please Login First');
                // $('.cart-item-logininvalid').html('*Please Login First');
            }
        },
        error: function (params) {
            alert(params);
        }
    });
}
$(document).ready(function () {
    // $('.cart-item-logininvalid').html('');
});
function showLocation()
{
    console.log(geolocation.latitude);
}