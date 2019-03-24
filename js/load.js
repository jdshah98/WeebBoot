$(document).ready(function () {
    $.ajax({
        url: './php/loading.php',
        type: 'get',
        success: function (data) {
            // console.log(data);
        },
        error: function (data) {
            alert(data);
        }
    });
    // var food_items='<div class="col-md-4"><div class="card shadow-lg p-0 mb-4 bg-light"><img class="card-img-top" src="./img/food1.jpg"><div class="card-body"><p>Cherry Pie</p><p>$10</p><a href="#" class="btn btn-outline-secondary">Add to Cart</a></div></div></div>"';

    $.ajax({
        url: './php/foodmenu.php',
        success: function (params) {
            // console.log(params);

            var foods = JSON.parse(params);
            foods.forEach(element => {
                var food_items = '<div class="col-md-4 item-div-' + element['fid'] + '"><div class="card shadow-lg p-0 mb-4 bg-light"><img class="card-img-top" src="./' + element['url'] + '"><div class="card-body"><p>' + element['name'] + '</p><p>' + element['cost'] + '</p><a href="#" onclick="itemClick(this)" class="btn btn-outline-secondary ' + element['fid'] + '">Add to Cart</a></div></div></div>';
                $('.foods-menu').append(food_items);
            });

            // for(int)

        },
        error: function (params) {

        }
    });
    // geoLocationPermisiion();
});

// function geoLocationPermisiion() {
//     function getLocation() {
//         if (navigator.geolocation) {
//             navigator.geolocation.geatCurrentPosition(showPosition);
//         } else {
//             alert("Geolocation is not supported by this browser.");
//         }
//     }

//     function showPosition(position) {
//         lan = position.coords.latitude;
//         long = position.coords.longitude;
//         geolocation = new GeoLocation(lan, long);
//         console.log("latitude: " + position.coords.latitude);
//         console.log("longitude : " + position.coords.longitude);
//     }
//     getLocation();
//     showPosition();
// }
class GeoLocation {
    latitude = 0;
    longitude = 0;
    constructor(latitude, longitude) {
        this.latitude = latitude;
        this.longitude = longitude;
    }
}
geolocation = new GeoLocation(0, 0);