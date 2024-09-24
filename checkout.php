<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<?php
include_once("header.php")
?>




<body>


	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->


			<?php

				$getid  = $_GET['id'];
				$query= "SELECT * FROM products WHERE product_id LIKE '%$getid%' ";
				$fire=mysqli_query($conn, $query);

				$row = mysqli_fetch_array($fire);

					 $delivery_pname = $row['product_name'];
					 $delivery_category = $row['product_categories'];
					 $delivery_price = $row['product_price'];
				

			?>

			
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Add Delivery Details</h4>
					<form action="#" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>

										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Address" name="address" required="">
											</div>
										</div>

										
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Town/City" name="city" required="">
									</div>

									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="State" name="state" required="">
									</div>

									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Pincode" name="pincode" required="">
									</div>

								
								</div>
								<button class="submit check_out btn" type="submit" name="delivery">Delivery to this Address</button>
							</div>
						</div>
					</form>


					<?php
					
						if (isset($_POST['delivery'])) {
							
							 $delivery_name = $_POST['name'];
							 $delivery_mobile = $_POST['number'];
							 $delivery_address = $_POST['address'];
							 $delivery_city = $_POST['city'];
							 $delivery_state = $_POST['state'];
							 $delivery_pincode = $_POST['pincode'];

							$query = "INSERT INTO delivery(delivery_name,delivery_pname,delivery_category,delivery_price,delivery_mobile,delivery_address,delivery_city,delivery_state,delivery_pincode) 
							values('$delivery_name', '$delivery_pname', '$delivery_category', '$delivery_price', '$delivery_mobile', '$delivery_address', '$delivery_city', '$delivery_state', '$delivery_pincode')";

							$fire = mysqli_query($conn,$query);


						}
					
					?>


					<div class="checkout-right-basket">
						<a href="payment.php">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over Rs.100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<?php
		include_once('footer.php');
	?>

</body>

</html>