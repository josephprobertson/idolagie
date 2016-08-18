<?php 

require_once("inc/config.php");
include("inc/products.php"); 

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])){
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: soaps.php");
	exit();
}

$section = "soaps";
$pageTitle = $product["name"];
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<h3><div class="breadcrumb"><a href="soaps.php">Products</a> &gt; <?php echo $product["name"]; ?></div><h3>

				<div class="soap-picture" id="soap-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
					<h4><span class="price">$<?php echo $product["price"]; ?></h4>
					<p id="Ingredients">Ingredients: <?php echo $product["ingredients"]; ?></p>
				</div>

				<div id="soap-details">

					
					<p><span class="description"><?php echo $product["description"]; ?></p>
					<p>All of our soaps contain the best oils we can find, in what we consider the best formulation.  We hand craft each of our soaps one batch at a time.<br><br>Due to the handmade nature of the soaps, each bar can vary slightly in size, shape, and color.<br><br>We do $5 flat rate for shipping, whether you buy one bar of soap, or all the soap we have.  So stock up!!</p>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
						<input type="submit" value="Add to Cart" name="submit" class="button">
						</form>

						<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='17839538'></div>

						<p class="note-designer">* Tested on friends, not animals.</p>
				</div>

			</div>

		</div>



<?php include("inc/footer.php"); ?>