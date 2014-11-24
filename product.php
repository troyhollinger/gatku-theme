<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ;?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
    <!-- <link href="css/bootstrap.css" rel="stylesheet" media="screen"> -->
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.windows.js"></script>
    <script type="text/javascript" src="waypoints.js"></script>
  </head>


  <body>


<?php 

include("inventory.php");
?>

<?php 
$product_id = $_GET["id"];
$item = $products[$product_id];

?>

<?php 
$title = $item["name"];

$polespear = $item["img"];
//Product Name
$productTitle = $item["name"];
//Product Description
$productDescription = $item["description"];
//Product Price
$productPrice = $item["price"];

// $sigPar  $barPar  $slipTip  $flopper  $inshore  $shrink  $xBand  $setup
$addon1 = $item["addon1"];
$addon2 = $item["addon2"];
$addon3 = $item["addon3"];
$addon4 = $item["addon4"];
$addon5 = $item["addon5"];
$addon6 = $item["addon6"];
$addon7 = $item["addon7"];
$addon8 = $item["addon8"];
?> 

	<?php include("inc/header.php");?>
		<div class="scroller full" id="scrollerdiv"> 
			<img src=<?php echo '"' . $polespear . '"' ;?> class="polespear-image" id="pole" />
		</div>
		<div class="polespear-content full">
			<div class="content-pane center">
				<h2 class="product-title"><?php echo $productTitle ;?></h2>
				<p class="product-description"><?php echo $productDescription ;?></p>
				<p class="price"><sup>$</sup><big><big><?php echo $productPrice ;?></big></big> &nbsp;&nbsp;/+ <sup>$</sup>10 Shipping within USA  /International Rates Vary</p>
				<form class="add-ons">
					<p class="caption">Click to add option to your order-</p>
					<div class="addon-row-left left">
						<div>
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon1["name"] . '"' ;?> id=<?php echo '"' . $addon1["tagname"] . '"' ;?>/>
						<label for=<?php echo '"' . $addon1["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon1["name"];?></span><span class="addon-price">- <sup>$</sup><?php echo $addon1["price"]?></span></label>
					    </div>
					    <div>
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon2["name"] . '"' ;?> id= <?php echo '"' . $addon2["tagname"] . '"' ;?>/>
						<label for=<?php echo '"' . $addon2["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon2["name"];?></span><span class="addon-price"> - <sup>$</sup><?php echo $addon2["price"]?></span></label>
					    </div>
					    <div>
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon3["name"] . '"' ;?> id=<?php echo '"' . $addon3["tagname"] . '"' ;?>/>
						<label for=<?php echo '"' . $addon3["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon3["name"];?></span></big><span class="addon-price"> - <sup>$</sup><?php echo $addon3["price"]?></span></label>
					    </div>
					    <div>
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon4["name"] . '"' ;?> id=<?php echo '"' . $addon4["tagname"] . '"' ;?> />
						<label for=<?php echo '"' . $addon4["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon4["name"];?></span><span class="addon-price">- <sup>$</sup><?php echo $addon4["price"]?></span></label>
						</div>
					</div>
					<div class=" addon-row-right left">
						<div  <?php if ($addon5 == "") { echo 'style="display:none"' ;} ;?>>
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon5["name"] . '"' ;?> id=<?php echo '"' . $addon5["tagname"] . '"' ;?> />
						<label for=<?php echo '"' . $addon5["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon5["name"];?></span><span class="addon-price">- <sup>$</sup><?php echo $addon5["price"]?></span></label>
						</div>
						<div  <?php if ($addon6 == "") { echo 'style="display:none"' ;} ;?>>
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon6["name"] . '"' ;?> id=<?php echo '"' . $addon6["tagname"] . '"' ;?> />
						<label for=<?php echo '"' . $addon6["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon6["name"];?></span><span class="addon-price">- <sup>$</sup><?php echo $addon6["price"]?></span></label>
						</div>
						<div  <?php if ($addon7 == "") { echo 'style="display:none"' ;} ;?>> 
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon7["name"] . '"' ;?> id=<?php echo '"' . $addon7["tagname"] . '"' ;?> />
						<label for=<?php echo '"' . $addon7["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon7["name"];?></span><span class="addon-price">- <sup>$</sup><?php echo $addon7["price"]?></span></label>
						</div>
						<div  <?php if ($addon8 == "") { echo 'style="display:none"' ;} ;?>>
						<input type="checkbox" class="check right" name=<?php echo '"' . $addon8["name"] . '"' ;?> id=<?php echo '"' . $addon8["tagname"] . '"' ;?> />
						<label for=<?php echo '"' . $addon8["tagname"] . '"' ;?>><span class="addon-name"><?php echo $addon8["name"];?></span><span class="addon-price">- <sup>$</sup><?php echo $addon8["price"]?></span></label>
						</div>
					</div>
					<input type="submit" name="addtocart" value="Add To Cart" id="addtocart"/>
				</form>
			</div>
		</div>
		<script>
			window.onload = function() {
		    // for animated scrolling $("#scrollerdiv").animate({scrollLeft: $("#pole").width()}, 1000);
		    $("#scrollerdiv").scrollLeft($("#pole").width());
		};
		</script>
	</body>
</html>