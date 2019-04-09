<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Delivery System | Welcome</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="./img/favicon.png">
</head>

<body>
    <?php include("./php/header.php") ?>

    <!--- Image Slide-->

    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators centered">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="brightness" src="img/slider1.jpg">
                <div class="carousel-caption">
                    <h2 class="display-2">The Best Food Megamarket</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="brightness" src="img/slider2.jpg">
                <div class="carousel-caption">
                    <h2 class="display-2">Variety of products to choose from</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="brightness" src="img/slider3.jpg">
                <div class="carousel-caption">
                    <h2 class="display-2">Always fresh and high Quality product</h2>
                </div>
            </div>
        </div>
    </div>

    <!--- searchbox -->

    <div class="searchbox shadow-lg p-4 mb-5 bg-light center-block">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 centered">
            <form class="navbar-form " role="search">
                <div class="input-group add-on">
                    <input class="form-control" placeholder="Search for Restaurants or Dishes..." name="srch-term" id="srch-term" type="text">
                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit">SEARCH</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row text-center box padding shadow-lg p-4 mb-4 bg-light">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="./img/box1.png">
                <p class="padding"><b>No Minimum Order</b></p>
                <p>Order in for yourself or for the group, with no restrictions on order value</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="./img/box2.png">
                <p class="padding"><b>Live Order Tracking</b></p>
                <p>Know where your order is at all times, from the restaurant to your doorstep</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <img src="./img/box4.png">
                <p class="padding"><b>Lightning-Fast Delivery</b></p>
                <p>Experience superfast delivery for food delivered fresh & on time</p>
            </div>
        </div>
    </div>


    <!--heading -->

    <div class="container-fluid">
        <div class="heading text-center">
            <h2 class="text-center" style="margin-top:30px;">Special Offer</h2>
            <hr>
        </div>
    </div>

    <!--- Cards -->


    <div class="container-fluid">
        <div class="row padding foods-menu">
        </div>
    </div>

    <!-- Login Form-->


    <!--Add To cart-->
    <div id="id03" class="modal" class="add-to-cart-block">
        <div class="modal-content">
            <div class="container">
                <i class="fa fa-window-close" aria-hidden="true" onclick="document.getElementById('id03').style.display='none'"></i>
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
                                <div class="col-sm-2 col-md-6 hidden-xs cart-item-img"><img src="./img/food1.jpg" width="100px" height="100px" alt="Cart Image" class="img-responsive" /></div>
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
                    <tr>
                        <div class="cart-item-logininvalid"></div>
                    </tr>
                    <tr class="visible-xs">
                        <!-- <td class="text-center"><strong>Total 1.99</strong></td> -->
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total <div class="cart-item-total">$1.99</div>
                            </strong></td>
                        <td><a href="#" class="btn btn-success btn-block" onclick="cartItemCheckoutClick(this)">Checkout
                                <i class="fa fa-angle-right"></i></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--Floating Button-->

    <?php include("./php/footer.php"); ?>
    
    <script src="./js/load.js"></script>
    
</body>

</html>