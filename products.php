<?php include("inc/header.php");?>
<?php include("inventory.php");?>

<div class="linktester">
<?php 

foreach($products as $id => $product) {
	echo "<a href='product.php?id=" . $id . "'>" . $product['name'] . "</a><br>" ;

};

?>

</div>