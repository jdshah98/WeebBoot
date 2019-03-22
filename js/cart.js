function itemClick(e)
{
    var classes=e.className.split(" ");
    console.log($('.item-div-'+classes[2]));    
    $.ajax({
        url:'./php/fooddetails.php',
        data:{'fid':classes[2]},
        type:'get',
        success:function(params) {
            
        },
        error:function (params) {
        }
    });
    console.log(classes[2]);
}
