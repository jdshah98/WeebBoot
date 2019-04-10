$(document).ready(function(){
    $('#gujarati ,#american,#punjabi,#south,#chinese').css('background-color','#555555');
    $('#south').css('background-color','#dd4132');
    generate('south indian');
});

$('#chinese').on('click',function(){
    $('.display').html('');
    generate('chinese');
    $('#gujarati ,#american,#punjabi,#south,#chinese').css('background-color','#555555');
    $('#chinese').css('background-color','#9e1030');
    
    
    
});

$('#south').on('click',function(){
    $('.display').html('');
    generate('south indian');
    $('#gujarati ,#american,#punjabi,#south,#chinese').css('background-color','#555555');
    $('#south').css('background-color','#dd4132');
});

$('#punjabi').on('click', function () {
    $('.display').html('');
    generate('punjabi');
    $('#gujarati ,#american,#punjabi,#south,#chinese').css('background-color','#555555');
    $('#punjabi').css('background-color','#00539c');
});

$('#american').on('click', function () {
    $('.display').html('');
    generate('american');
    $('#gujarati ,#american,#punjabi,#south,#chinese').css('background-color','#555555');
    $('#american').css('background-color','#d69c2f');
});

$('#gujarati').on('click', function () {
    $('.display').html('');
    generate('gujarati');
    
    $('#gujarati ,#american,#punjabi,#south,#chinese').css('background-color','#555555');
    $('#gujarati').css('background-color','#fa3e36');
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
                var food_items = '<div class="col-md-4 item-div-' + element['fid'] + '"><div class="card shadow-lg p-0 mb-4 bg-light"><img class="card-img-top" src="./' + element['url'] + '"><div class="card-body"><p>' + element['name'] + '</p><p>' + element['cost'] + '</p><a href="#" onclick="cartItemCheckoutClick(this)" class="btn btn-outline-secondary ' + element['fid'] + '" id="'+element['fid']+'">Add to Cart</a></div></div></div>';
                $('.display').append(food_items);
                login();
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
