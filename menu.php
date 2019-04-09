<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Food Delivery System | Menu</title>
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


<div>

<button class="tablink" onclick="openPage('Chinese', this, '#9E1030')" >Chinese</button>
<button id="defaultOpen" class="tablink" onclick="openPage('Southindian', this, '#DD4132')">South Indian</button>
<button class="tablink" onclick="openPage('Punjabi', this, '#00539C')">Punjabi</button>
<button class="tablink" onclick="openPage('Gujrati', this, '#D69C2F')">Gujrati</button>
<button class="tablink" onclick="openPage('Amerikan', this, '#5A3E36')">Amerikan</button>


<div id="Chinese" class="tabcontent">
    <h3>Chinese Food</h3>
    

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
		</div>
  </div>
  

<div id="Southindian" class="tabcontent">
  <h3>South Indian Food</h3>


  
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
</div>
</div>

<div id="Punjabi" class="tabcontent">
    <h3>Punjabi Food</h3>




    
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
        </div>
        


  </div>
  

  <div id="Gujrati" class="tabcontent">
    <h3>Gujrati Food</h3>



    
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
        </div>
        



  </div>
  

  <div id="Amerikan" class="tabcontent">
    <h3>Amerikan Food</h3>




    
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
        </div>
        


        
  </div>
  

</div>


<script>
    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>


<!-- Code of menu  ended-->

	<?php include("./php/footer.php");?>

	<script>
		$('.nav-menu').addClass('active');
		$('.nav-home').removeClass('active');
		$('.nav-cart').removeClass('active');
		$('.nav-about').removeClass('active');
		</script>
</body>
<script src="./js/cartpage.js"></script>


</html>