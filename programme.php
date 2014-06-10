<?php include('inc/products.php'); 


if(isset($_GET["id"])) {
	$product_id = $_GET["id"];
		if(isset($programmes["$product_id"])) {
		$product = $programmes["$product_id"];
		}
} 
if(!isset($product)) {
	header("Location: programmes.php");
	exit();
}

$section = "programme";
$pageTitle = $product["name"];

include("inc/header2.php");

?>



<section id="product">
			<div class="container">
				<div class="row">

				<div class="breadcrumb">
					<a href="programmes.php">Programmes</a> <i class="fa fa-chevron-right"></i> <?php echo $product["name"]; ?>
				</div>
				

			

				<div class="col-md-6">
					<img src='<?php echo $product["img"]; ?>' alt='<?php echo $product["name"]; ?>' class="img-responsive">
				</div>

				<div class="col-md-6 pay_text">

					<!-- <header class="text-center">
						<h1></h1>
					</header> -->

					<h3><span class="monies">$ <?php echo $product["price"]; ?></span>, <?php echo $pageTitle; ?></h3>
					

					<p>This programme is <?php echo $product["forWho"];?>.</p>
					<p><?php echo $product["info"]; ?></p>
					<p><?php echo $product["more_info"]; ?></p>
					<p></p>

					<div class="addToCart">


						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value='<?php echo $product["paypal"]; ?>'>
								<table>
									<tr>
										<td>
											<input type="hidden" name="on0" value="Times">Class Times
										</td>
									</tr>
									<tr>
										<td>
											<select name="os0">
												<?php foreach($product["classTimes"] as $time) { ?>

													<option value="<?php echo $time; ?>"><?php echo $time; ?></option>

												<?php } ?>
											</select> 
										</td>
									</tr>
								</table>
							<input class="send_btn" type="submit" value="Sign Up Now" name="submit" >
						</form>



					</div>


				</div>

			</div>



				


			</div>
		</section>


























<?php

include("inc/footer.php");

?>
