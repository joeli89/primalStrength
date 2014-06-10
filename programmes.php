<?php include('inc/products.php'); ?>
<?php 
$pageTitle = "Primal Summer Programmes";
$section = "programmes";
include('inc/header2.php');
?>

<section id="about">

<div class="container ">
	<div class="row">

		<div class="programme_text">
			<h1>Summer Programmes</h1>
			<h4>We have <?php echo count($programmes); ?> programmes we'll be running.</h4>
		</div>
	</div>

		
	<div class="row">

		<div class="programme_image">
			<ul class="programmes">
				<?php foreach($programmes as $product_id => $programme) { 
						echo '<div class="col-md-6 textings">';
						echo "<li>";
						echo '<a href="programme.php?id=' . $product_id . '">';
						echo'<img src="' . $programme["img"] . '" alt="' . $programme["name"] . '">';
						echo'<h3>' . $programme["name"] . '</h3>';
						echo'<p>View Programme</p>';
						echo "</a>";
						echo "</li>";
						echo "</div>";
				}  ?>
			</ul>
		</div>

	</div>
</div>

</section>







<?php 
include('inc/footer.php');
?>