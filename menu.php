<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Food Delivery System | Menu</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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

<?php include("./php/header.php");?>

    <!--Add To cart-->
	<div id="id03" class="modal" style="float:right;" class="add-to-cart-block">
		<div class="modal-content">
			<div class="container">
				<i class="fa fa-window-close" aria-hidden="true"
					onclick="document.getElementById('id03').style.display='none'"></i>
			</div>

			<table id="cart" class="table table-hover table-condensed">
				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th style="width:10%">Price</th>
						<th style="width:8%">Quantity</th>
						<th style="width:22%" class="text-center">Subtotal</th>
						<th style="width:10%"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-th="Product">
							<div class="row">
								<div class="col-sm-2 col-md-6 hidden-xs cart-item-img"><img src="./img/food1.jpg" width="100px"
										height="100px" alt="Cart Image" class="img-responsive" /></div>
								<div class="col-sm-10 col-md-6">
									<h4 class="cart-item-name nomargin">Product 1</h4>
									<p class="cart-item-discription">Discription of Product 1</p>
								</div>
							</div>
						</td>
						<td data-th="Price " class="cart-item-price">$1.99</td>
						<td data-th="Quantity">
							<input type="number" class="form-control text-center cart-noof-item" value="1">
						</td>
						<td data-th="Subtotal" class="text-center">1.99</td>
						<td class="" data-th="">
							<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
						</td>
					</tr>
					
				</tbody>
				<tfoot>
					<tr><div class="cart-item-logininvalid"></div></tr>
					<tr class="visible-xs">
						<!-- <td class="text-center"><strong>Total 1.99</strong></td> -->
					</tr>
					<tr>
						<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
						</td>
						<td colspan="2" class="hidden-xs"></td>
						<td class="hidden-xs text-center"><strong>Total <div class="cart-item-total">$1.99</div></strong></td>
						<td><a href="#" class="btn btn-success btn-block" onclick="cartItemCheckoutClick(this)">Checkout <i class="fa fa-angle-right"></i></a>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
<!-- Code of menu-->



	<div class="tablink" id="chinese">Chinese</div>
	<div class="tablink" id="south">South Indian</div>
	<div class="tablink" id="punjabi">Punjabi</div>
	<div class="tablink" id="gujarati">Gujarati</div>
	<div class="tablink" id="american">American</div>

	<div class="container-fluid">
			<div class="row padding display">
			</div>
	</div>

	<?php include("./php/footer.php");?>

	<script>
		$('.nav-menu').addClass('active');
		$('.nav-home').removeClass('active');
		$('.nav-cart').removeClass('active');
		$('.nav-about').removeClass('active');
		</script>
	<script src="./js/cartpage.js"></script>
	<script src="js/menu.js"></script>
</body>

</html>