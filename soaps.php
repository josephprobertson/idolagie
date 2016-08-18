<?php 

require_once("inc/config.php");

$pageTitle = "Our Full Product Catalog";
$section = "soaps";

include('inc/header.php'); 
?>

		<div class="latest products" id="latest_products">

				<div class="wrapper">

				<?php include(ROOT_PATH . "inc/products.php"); ?>
				<ul class="products" id="products">
					<?php 

						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) {
							$position = $position + 1;
							if ($total_products - $position < 99) {
								$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
							}
						} 
						echo $list_view_html;
					?>			
				</ul>

			</div>

		</div>

<?php include("inc/footer.php"); ?>