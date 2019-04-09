<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Food Delivery System | Cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet">

	<!-- <link rel="stylesheet" type="text/css" href="css/style2.scss"/>   -->

	<script type="text/javascript" src="js/script.js"></script>

	<link rel="shortcut icon" type="image/png" href="./img/favicon.png">
</head>

<body>

	<?php include("./php/header.php"); ?>
	<!--Specific code for Cart-->

	<div class="shopping-cart container">

		<div class="column-labels">
			<label class="product-image">Image</label>
			<label class="product-details">Product</label>
			<label class="product-price">Price</label>
			<label class="product-quantity">Quantity</label>
			<label class="product-removal">Remove</label>
			<label class="product-line-price">Total</label>
		</div>
		<div class="products">

		</div>
		<div class="totals">
			<div class="totals-item">
				<label>Subtotal</label>
				<div class="totals-value" id="cart-subtotal">0.0</div>
			</div>
			<div class="totals-item">
				<label>Tax (5%)</label>
				<div class="totals-value" id="cart-tax">0.0</div>
			</div>
			<div class="totals-item">
				<label>Shipping</label>
				<div class="totals-value" id="cart-shipping">0.0</div>
			</div>
			<div class="totals-item totals-item-total">
				<label>Grand Total</label>
				<div class="totals-value" id="cart-total">0.0</div>
			</div>
		</div>

		<button class="checkout">Checkout</button>

	</div>
	<?php include("./php/footer.php"); ?>
	
	<script>
		$('.nav-cart').addClass('active');
		$('.nav-home').removeClass('active');
		$('.nav-menu').removeClass('active');
		$('.nav-about').removeClass('active');
		</script>
</body>
<script src="./js/cartpage.js"></script>


</html>