<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Food Delivery System | About</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

	<!-- <link rel="stylesheet" type="text/css" href="css/style2.scss"/>   -->

	<script type="text/javascript" src="js/script.js"></script>

	<link rel="shortcut icon" type="image/png" href="./img/favicon.png">
	<style>
	
	.card-img-top{
		height: 200px;
		width: 200px;
		margin-left: 35px;
		margin-top: 20px;
		border-radius: 50%;
	}
	.card{
		background-color: lightgreen;
	}
	</style>
</head>

<body>

<?php include("./php/header.php")?>
	<!--code for about-->

	<div class="container-fluid2">
		<div class="row padding">
			<div class="col-md-3">
				<div class="card shadow-lg p-0 mb-4 bg-light">
					<img class="card-img-top"  src="./img/parth23.jpg">
					<div class="card-body">
						<p style="font-weight: 400;font-size: 20px;">Parth Shekhaliya</p>
						<hr style="background-color:black;margin-top: -10px;margin-bottom:0px; height: 1px">
						<p style="font-size: 15px">parthshekhaliya18@gmail.com</p>
						<p>+91 9016632615</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card shadow-lg p-0 mb-4 bg-light">
					<img class="card-img-top" src="./img/roydo-min.JPG">
					<div class="card-body">
						<p style="font-weight: 400;font-size: 20px;">Parth Roy</p>
						<hr style="background-color:black;margin-top: -10px;margin-bottom:0px; height: 1px">
						<p style="font-size: 15px">parthroy94@gmail.com</p>
						<p>+91 9016632615</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card shadow-lg p-0 mb-4 bg-light">
					<img class="card-img-top" src="./img/jainam.jpg">
					<div class="card-body">
						<p style="font-weight: 400;font-size: 20px;">Jainam Shah</p>
						<hr style="background-color:black;margin-top: -10px;margin-bottom:0px; height: 1px">
						<p style="font-size: 15px">shahjainamj8657@gmail.com</p>
						<p>+91 9016632615</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card shadow-lg p-0 mb-4 bg-light">
					<img class="card-img-top" src="./img/saurabh.jpg">
					<div class="card-body">
						<p style="font-weight: 400;font-size: 20px;">Saurabh Maheshwari</p>
						<hr style="background-color:black;margin-top: -10px;margin-bottom:0px; height: 1px">
						<p style="font-size: 15px">saurabh.maheshwari1011@gmail.com</p>
						<p>+91 9016632615</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
			<div class="heading text-center">
				<h2 class="text-center" style="margin-top:30px;">Give us Feedback</h2>
				<hr>
			</div>
		</div>

		<div class="card container bg-dark text-white feedback">
				<div class="card-body">
					<div class="feed">
						<label style="color:white;">Name </label>
						<input type="text" placeholder="Name" id="feedbackname">
				</div>
				<div class="feed" >
						<label style="color:white;">Email </label>
						<input type="text" placeholder="Email" id="feedbackemail">
				</div>
				<div class="feed" >
						<label style="color:white;">Comment </label>
						<input type="textarea" rows="4" placeholder="Add Comment here..." cols="50" id="feedbackcomment">
				</div>
				<input type="submit" class="btn btn-success">
				</div>
				

</div>


	<!-- Login Form-->
<?php include("./php/footer.php");?>

<script>
		$('.nav-about').addClass('active');
		$('.nav-home').removeClass('active');
		$('.nav-cart').removeClass('active');
		$('.nav-menu').removeClass('active');
		</script>
</body>
<script src="./js/cartpage.js"></script>


</html>