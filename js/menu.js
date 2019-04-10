$(document).ready(function(){
    generate('south indian');
});

$('#chinese').on('click',function(){
    $('.display').html('');
    generate('chinese');
});

$('#south').on('click',function(){
    $('.display').html('');
    generate('south indian');
});

$('#punjabi').on('click', function () {
    $('.display').html('');
    generate('punjabi');
});

$('#american').on('click', function () {
    $('.display').html('');
    generate('american');
});

$('#gujarati').on('click', function () {
    $('.display').html('');
    generate('gujarati');
});

function generate(category){
    $.ajax({
        url: './php/fooditems.php',
        type: 'post',
        data:{
            "ctg": category
        },
        success:function(data){
            console.log(data);
            var foods = JSON.parse(data);
            foods.forEach(element => {
                var food_items = '<div class="col-md-4 item-div-' + element['fid'] + '"><div class="card shadow-lg p-0 mb-4 bg-light"><img class="card-img-top" src="./' + element['url'] + '"><div class="card-body"><p>' + element['name'] + '</p><p>' + element['cost'] + '</p><a href="#" onclick="itemClick(this)" class="btn btn-outline-secondary ' + element['fid'] + '">Add to Cart</a></div></div></div>';
                $('.display').append(food_items);
                $('.card-img-top').css('height', '300px');
            });

        },
        error: function (data) {
            console.log(data+" error");            
        }
    });
}

// <div class="col-md-4">
//     <div class="card shadow-lg p-0 mb-4 bg-light">
//         <img class="card-img-top" src="./img/food1.jpg">
//             <div class="card-body">
//                 <p>Cherry Pie</p>
//                 <p>$10</p>
//                 <a href="#" class="btn btn-outline-secondary">Add to Cart</a>
//             </div>
// 			</div>
//     </div>


/* <h3>Chinese Food</h3>
    <div class="container-fluid">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card shadow-lg p-0 mb-4 bg-light">
                    <img class="card-img-top" src="./img/food1.jpg">
                        <div class="card-body">
                            <p>Cherry Pie</p>
                            <p>$10</p>
                            <a href="#" class="btn btn-outline-secondary">Add to Cart</a>
                        </div>
				</div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-lg p-0 mb-4 bg-light">
                        <img class="card-img-top" src="./img/food2.jpg">
                            <div class="card-body">
                                <p>Grilled Bass</p>
                                <p>$10</p>
                                <a href="#" class="btn btn-outline-secondary">Add to Cart</a>
                            </div>
				</div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-lg p-0 mb-4 bg-light">
                            <img class="card-img-top" src="./img/food3.jpg">
                                <div class="card-body">
                                    <p>Vegan Charcuterie</p>
                                    <p>$10</p>
                                    <a href="#" class="btn btn-outline-secondary">Add to Cart</a>
                                </div>
				</div>
                        </div>
                    </div>
                </div> */
