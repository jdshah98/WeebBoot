$(document).ready(function () {
    $.ajax({
        url: './php/loading.php',
        type: 'get',
        success: function (data) {
            console.log(data);
        },
        error: function (data) {
            alert(data);
        }
    });
    var food_items='<div class="col-md-4"><div class="card shadow-lg p-0 mb-4 bg-light"><img class="card-img-top" src="./img/food1.jpg"><div class="card-body"><p>Cherry Pie</p><p>$10</p><a href="#" class="btn btn-outline-secondary">Add to Cart</a></div></div></div>"';

    // $.ajax({
    //     url:'./php/foodmenu.php',
    //     success:function(params) {
            
    //     },
    //     error:function (params) {
            
    //     }
    // });
});