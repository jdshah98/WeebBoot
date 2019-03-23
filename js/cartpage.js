/* Set rates + misc */
count=0;

$(document).ready(function () {
  // cartitem = '<div class="product"><div class="product-image"><img src="./img/food1.jpg" width="100px" height="100px" alt="Cart Image"></div><div class="product-details"><div class="product-title">product-title</div><p class="product-description">Product Discription</p></div><div class="product-price">12.99</div><div class="product-quantity"><input type="number" value="2" min="1"></div><div class="product-removal"><button class="remove-product">Remove</button></div><div class="product-line-price">25.98</div></div>';
  $.ajax({
    url: './php/cartitems.php',
    success: function (params) {
      items = JSON.parse(params);
      console.log(items);
      items.forEach(element => {
        // cartitem = '<div class="product"><div class="product-image"><img src="./img/food1.jpg" width="100px" height="100px" alt="Cart Image"></div><div class="product-details"><div class="product-title">product-title</div><p class="product-description">Product Discription</p></div><div class="product-price">12.99</div><div class="product-quantity"><input type="number" value="2" min="1"></div><div class="product-removal"><button class="remove-product">Remove</button></div><div class="product-line-price">25.98</div></div>';
        cartitem = '<div class="product"><div class="product-image"><img src="./img/'+element['url']+'" width="100px" height="100px" alt="Cart Image"></div><div class="product-details"><div class="product-title">'+element['name']+'</div><p class="product-description">'+element['ingredients']+'</p></div><div class="product-price">'+element['cost']+'</div><div class="product-quantity"><input type="number" value="'+element['qty']+'" min="1"></div><div class="product-removal"><button class="remove-product">Remove</button></div><div class="product-line-price">'+element['qty']*element['cost']+'</div></div>';
        $('.products').append(cartitem);
        init();
        count++;
      });
    },
    error: function (params) {

    }
  });
});
function init() {
  var taxRate = 0.05;
  var shippingRate = 15.00;
  var fadeTime = 300;

  if(count == 1)
  {
    recalculateCart();
  }
  /* Assign actions */
  $('.product-quantity input').change(function () {
    updateQuantity(this);
  });

  $('.product-removal button').click(function () {
    removeItem(this);
  });


  /* Recalculate cart */
  function recalculateCart() {
    var subtotal = 0;

    /* Sum up row totals */
    $('.product').each(function () {
      subtotal += parseFloat($(this).children('.product-line-price').text());
    });

    /* Calculate totals */
    var tax = subtotal * taxRate;
    var shipping = (subtotal > 0 ? shippingRate : 0);
    var total = subtotal + tax + shipping;

    /* Update totals display */
    $('.totals-value').fadeOut(fadeTime, function () {
      $('#cart-subtotal').html(subtotal.toFixed(2));
      $('#cart-tax').html(tax.toFixed(2));
      $('#cart-shipping').html(shipping.toFixed(2));
      $('#cart-total').html(total.toFixed(2));
      if (total == 0) {
        $('.checkout').fadeOut(fadeTime);
      } else {
        $('.checkout').fadeIn(fadeTime);
      }
      $('.totals-value').fadeIn(fadeTime);
    });
  }


  /* Update quantity */
  function updateQuantity(quantityInput) {
    /* Calculate line price */
    var productRow = $(quantityInput).parent().parent();
    var price = parseFloat(productRow.children('.product-price').text());
    var quantity = $(quantityInput).val();
    var linePrice = price * quantity;

    /* Update line price display and recalc cart totals */
    productRow.children('.product-line-price').each(function () {
      $(this).fadeOut(fadeTime, function () {
        $(this).text(linePrice.toFixed(2));
        recalculateCart();
        $(this).fadeIn(fadeTime);
      });
    });
  }


  /* Remove item from cart */
  function removeItem(removeButton) {
    /* Remove row from DOM and recalc cart total */
    var productRow = $(removeButton).parent().parent();
    productRow.slideUp(fadeTime, function () {
      productRow.remove();
      recalculateCart();
    });
  }
}