<!-- Listen below are all Gatku products displayed on 
the website, along with their attributes.  -->
<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>

<?php 

$sigPar = array(
	"name" => "Signature Paralyzer",
	"tagname" => "signature-paralyzer",
	"price" => "34"
);
$barPar = array(
	"name" => "Barbed Paralyzer",
	"tagname" => "barbed-paralyzer",
	"price" => "34"
);
$slipTip = array(
	"name" => "Slip-Tip Head",
	"tagname" => "slip-tip",
	"price" => "54"
);
$flopper = array(
	"name" => "Flopper Head",
	"tagname" => "flopper-head",
	"price" => "44"
);
$inshore = array(
	"name" => "Inshore Shrinker",
	"tagname" => "inshore-shrinker",
	"price" => "49"
);
$shrink = array(
	"name" => "Shrink Wrap Grip",
	"tagname" => "shrink-wrap-grip",
	"price" => "10"
);
$xBand = array(
	"name" => "Extra Band",
	"tagname" => "extra-band",
	"price" => "14"
);
$setup = array(
	"name" => "Break Away Setup",
	"tagname" =>"break-away-setup",
	"price" => "34"
);



$products = array();
$products["sigPar"] = array(
	"name"        => $sigPar["name"],
	"cool-name"   => "PARALYZER",
	"tagname"     => $sigPar["tagname"],
	"windowname"  => "sigpar",
	"price"       => $sigPar["price"],
	"img"         => "./img/sevenfooter.jpg",
	"thumb"       => "./img/signature-paralyzer.png",
	"description" => "The GAT-KU flopper tip delivers a sharp punch. This 5/16&quot; shaft is made from 17 -4 hardened stainless. Thread type is 3/8-24.",
	"addon1"      => $barPar,
	"addon2"      => $slipTip,
	"addon3"      => $flopper,
	"addon4"      => $inshore,
	"addon5"      => "",
	"addon6"      => "",
	"addon7"      => "",
	"addon8"      => "",
	"number"      => "1"
);
$products["barPar"] = array(
	"name"        => $barPar["name"],
	"cool-name" => "PARALYZER",
	"tagname"     => $barPar["tagname"],
	"windowname"  => "barpar",
	"price"       => $barPar["price"],
	"img"         => "./img/sixfooter.jpg",
	"thumb"       => "./img/barbed-paralyzer.png",
	"description" => "The GAT-KU flopper tip delivers a sharp punch. This 5/16&quot; shaft is made from 17 -4 hardened stainless. Thread type is 3/8-24. Lorem ipsum and the aiun thehe oiaiuai ththt fdmfmfi san tuue tune dindid einging inin",
	"addon1"      => $sigPar,
	"addon2"      => $slipTip,
	"addon3"      => $flopper,
	"addon4"      => $inshore,
	"addon5"      => "",
	"addon6"      => "",
	"addon7"      => "",
	"addon8"      => "",
	"number"      => "2"
);
$products["sliptip"] = array(
	"name"        => $slipTip["name"],
	"cool-name" => "SLIP TIP",
	"tagname"     => $slipTip["tagname"],
	"windowname"  => "sliptip",
	"price"       => $slipTip["price"],
	"img"         => "./img/tenfooter.jpg",
	"thumb"       => "./img/slip-tip.png",
	"description" => "We have innovated the slip-tip to perfection! Changing the angle of the hole in the tip 
					allows the toggle line to bend back without the high-profile extrusion. We also counter-
					sink the hole so the knot fits snuggly inside the tip with little exposure. The tip is made 
					from 5/16\" hardened stainless that rides on a 3/16\" shaft. The Dynema slip line is 
					embedded into the stainless tip. The result is a sleek design that leaves the smallest 
					hole possible in your fish. Thread Thread type is 3/8&minus;24.",
	"addon1"      => $sigPar,
	"addon2"      => $barPar,
	"addon3"      => $flopper,
	"addon4"      => $inshore,
	"addon5"      => "",
	"addon6"      => "",
	"addon7"      => "",
	"addon8"      => "",
	"number"      => "3"
);
$products["flopper"] = array(
	"name"        => $flopper["name"],
	"cool-name" => "FLOPPER",
	"tagname"     => $flopper["tagname"],
	"windowname"  => "flopper",
	"price"       => $flopper["price"],
	"img"         => "./img/eightfooter.jpg",
	"thumb"       => "./img/flopper.png",
	"description" => "The GAT-KU flopper tip delivers a sharp punch. This 5/16&quot; shaft is made from 17 -4 hardened stainless. Thread type is 3/8-24.",
	"addon1"      => $sigPar,
	"addon2"      => $barPar,
	"addon3"      => $slipTip,
	"addon4"      => $inshore,
	"addon5"      => "",
	"addon6"      => "",
	"addon7"      => "",
	"addon8"      => "",
	"number"      => "4"
);
// $products["inshore"] = array(
// 	"name"        => $inshore["name"],
// 	"tagname"     => $inshore["tagname"],
// 	"windowname"  => "inshore",
// 	"price"       => $inshore["price"],
// 	"img"         => "./img/hi-res-pole.png",
// 	"thumb"       => "./img/",
// 	"description" => "The GAT-KU flopper tip delivers a sharp punch. This 5/16&quot; shaft is made from 17 -4 hardened stainless. Thread type is 3/8-24.",
// 	"addon1"      => $sigPar,
// 	"addon2"      => $barPar,
// 	"addon3"      => $slipTip,
// 	"addon4"      => $flopper,
// 	"addon5"      => $shrink,
// 	"addon6"      => $xBand,
// 	"addon7"      => $setup,
// 	"addon8"      => "",
// 	"number"      => "5"
// );
// $products["shrink"] = array(
// 	"name"        => $shrink["name"],
// 	"tagname"     => $shrink["tagname"],
// 	"windowname"  => "shrink",
// 	"price"       => $shrink["price"],
// 	"img"         => "./img/hi-res-pole.png",
// 	"thumb"       => "./img/",
// 	"description" => "The GAT-KU flopper tip delivers a sharp punch. This 5/16&quot; shaft is made from 17 -4 hardened stainless. Thread type is 3/8-24.",
// 	"addon1"      => $sigPar,
// 	"addon2"      => $barPar,
// 	"addon3"      => $slipTip,
// 	"addon4"      => $inshore,
// 	"addon5"      => $flopper,
// 	"addon6"      => $xBand,
// 	"addon7"      => $setup,
// 	"addon8"      => "",
// 	"number"      => "6"
// );
// $products["xband"] = array(
// 	"name"        => $xBand["name"],
// 	"tagname"     => $xBand["tagname"],
// 	"windowname"  => "xband",
// 	"price"       => $xBand["price"],
// 	"img"         => "./img/hi-res-pole.png",
// 	"thumb"       => "./img/",
// 	"description" => "The GAT-KU flopper tip delivers a sharp punch. This 5/16&quot; shaft is made from 17 -4 hardened stainless. Thread type is 3/8-24.",
// 	"addon1"      => $sigPar,
// 	"addon2"      => $barPar,
// 	"addon3"      => $slipTip,
// 	"addon4"      => $flopper,
// 	"addon5"      => $inshore,
// 	"addon6"      => $shrink,
// 	"addon7"      => $setup,
// 	"addon8"      => "",
// 	"number"      => "7"
// );
// $products["setup"] = array(
// 	"name"        => $setup["name"],
// 	"tagname"     => $setup["tagname"],
// 	"windowname"  => "setup",
// 	"price"       => $setup["price"],
// 	"img"         => "./img/hi-res-pole.png",
// 	"thumb"       => "./img/",
// 	"description" => "The GAT-KU flopper tip delivers a sharp punch. This 5/16&quot; shaft is made from 17 -4 hardened stainless. Thread type is 3/8-24.",
// 	"addon1"      => $sigPar,
// 	"addon2"      => $barPar,
// 	"addon3"      => $slipTip,
// 	"addon4"      => $flopper,
// 	"addon5"      => $inshore,
// 	"addon6"      => $shrink,
// 	"addon7"      => $xBand,
// 	"addon8"      => "",
// 	"number"      => "8"
// );
//-----------------------------------------------------|
//POLESPEARS ------------------------------------------|
//-----------------------------------------------------|
$polespears = array();
$polespears['six-ft'] = array(
	"name"        => "6' Generation 2 Hybrid Polespear",
	"cool-name"	  => "SIX'ER",
	"tagname"     => "six-foot-pole",
	"store-name"  => "<strong>SIX</strong><span>'ER</span> <small>/182cm</small>",
	"windowname"  => "sixfooter",
	"price"       => 105,
	"img"         => "./img/sixfooter.jpg",
	"thumb"       => "./img/polespear-end.png",
	"description" => "1/2\" SIX\" diameter carbon-graphite creates the ultimate low-profile 
	polespear. A sleek 3/8\" diameter front end allows a diver to effortlessly swing the 
	polespear with little drag in the water. The 1/2\" solid aluminum requires minimal band 
	strength for the speed and punch it delivers!",
	"addon1"      => $sigPar,
	"addon2"      => $barPar,
	"addon3"      => $slipTip,
	"addon4"      => $flopper,
	"addon5"      => $inshore,
	"addon6"      => $shrink,
	"addon7"      => $xBand,
	"addon8"      => "",
	"number"      => "9"
	);
$polespears['seven-ft'] = array(
	"name"        => "7' Generation 2 Hybrid Polespear",
	"cool-name"	  => "SEVEN'ER",
	"tagname"     => 'seven-foot-pole',
	"store-name"  => "<strong>SEVEN</strong><span>'ER</span> <small>/213cm</small>",
	"windowname"  => "sevenfooter",
	"price"       => 126,
	"img"         => "./img/sevenfooter.jpg",
	"thumb"       => "./img/polespear-end.png",
	"description" => "1/2\" SEVEN \" diameter carbon-graphite creates the ultimate low-profile 
	polespear. A sleek 3/8\" diameter front end allows a diver to effortlessly swing the 
	polespear with little drag in the water. The 1/2\" solid aluminum requires minimal band 
	strength for the speed and punch it delivers!",
	"addon1"      => $sigPar,
	"addon2"      => $barPar,
	"addon3"      => $slipTip,
	"addon4"      => $flopper,
	"addon5"      => $inshore,
	"addon6"      => $shrink,
	"addon7"      => $xBand,
	"addon8"      => "",
	"number"      => "10"
	);
$polespears['eight-ft'] = array(
	"name"        => "8' Generation 2 Hybrid Polespear",
	"cool-name"	  => "EIGHT'ER",
	"tagname"     => "eight-foot-pole",
	"store-name"  => "<strong>EIGHT</strong><span>'ER</span> <small>/243cm</small>",
	"windowname"  => "eightfooter",
	"price"       => 148,
	"img"         => "./img/eightfooter.jpg",
	"thumb"       => "./img/polespear-end.png",
	"description" => "1/2\" EIGHT \" diameter carbon-graphite creates the ultimate low-profile 
	polespear. A sleek 3/8\" diameter front end allows a diver to effortlessly swing the 
	polespear with little drag in the water. The 1/2\" solid aluminum requires minimal band 
	strength for the speed and punch it delivers!",
	"addon1"      => $sigPar,
	"addon2"      => $barPar,
	"addon3"      => $slipTip,
	"addon4"      => $flopper,
	"addon5"      => $inshore,
	"addon6"      => $shrink,
	"addon7"      => $xBand,
	"addon8"      => "",
	"number"      => "11"
	);
$polespears['nine-ft'] = array(
	"name"        => "9' Generation 2 Hybrid Polespear",
	"cool-name"	  => "NINE'ER",
	"tagname"     => 'nine-foot-pole',
	"store-name"  => "<strong>NINE</strong><span>'ER</span> <small>/274cm</small>",
	"windowname"  => "ninefooter",
	"price"       => 167,
	"img"         => "./img/ninefooter.jpg",
	"thumb"       => "./img/polespear-end.png",
	"description" => "1/2\" NINE \" diameter carbon-graphite creates the ultimate low-profile 
	polespear. A sleek 3/8\" diameter front end allows a diver to effortlessly swing the 
	polespear with little drag in the water. The 1/2\" solid aluminum requires minimal band 
	strength for the speed and punch it delivers!",
	"addon1"      => $sigPar,
	"addon2"      => $barPar,
	"addon3"      => $slipTip,
	"addon4"      => $flopper,
	"addon5"      => $inshore,
	"addon6"      => $shrink,
	"addon7"      => $xBand,
	"addon8"      => "",
	"number"      => "12"
	);
$polespears['ten-ft'] = array(
	"name"        => "10' Generation 2 Hybrid Polespear",
	"cool-name"	  => "TEN'ER",
	"tagname"     => 'ten-foot-pole',
	"store-name"  => "<strong>TEN</strong><span>'ER</span> <small>/304cm</small>",
	"windowname"  => "tenfooter",
	"price"       => 179,
	"img"         => "./img/tenfooter.jpg",
	"thumb"       => "./img/polespear-end.png",
	"description" => "1/2\" TEN \" diameter carbon-graphite creates the ultimate low-profile 
	polespear. A sleek 3/8\" diameter front end allows a diver to effortlessly swing the 
	polespear with little drag in the water. The 1/2\" solid aluminum requires minimal band 
	strength for the speed and punch it delivers!",
	"addon1"      => $sigPar,
	"addon2"      => $barPar,
	"addon3"      => $slipTip,
	"addon4"      => $flopper,
	"addon5"      => $inshore,
	"addon6"      => $shrink,
	"addon7"      => $xBand,
	"addon8"      => "",
	"number"      => "13"
	);


$video1text = "VIDEO 1 DESCRIPTION target certain fish that do not require 
                the length of hybrid-style spears. &lsquo;Sitting duck&rsquo; fish that spend most their time 
                perched on rocks are more approachable with less extension in front of the l
                oaded hand. Othtion comes covered in a 
                signature shrink-wrap grip. Compatible with all Generation 2 Hybrid lengths. 
                It&rsquo;s $49 and easy to buy now - <span>Add To Cart</span>";

$video2text = "VIDEO 2 DESCRIPTION in conditions or target certain fish that do not require 
                the length of hybrid-style spears. &lsquo;Sitting duck&rsquo; fish that spend most their time 
                perched on rocks are more approachable with less extension in front of the l
                oaded hand. Other times, divers are faced with less than a few feet of visibility, 
                rendering a lengthy extension useless.  
                It&rsquo;s $49 and easy to buy now - <span>Add To Cart</span>";

$video3text = "VIDEO 3 DESCRIPTION in conditions or target certain fish that do not require 
                the length of hybrid-style spears. &lsquo;Sitting duck&rsquo; fish that spend most their time 
                perched on rocks are more approachable with less extension in front of the l
                oaded hand. Other times, divers are faced with less than a few feet of visibility, 
                rendering a le three feet. This 12&quot; section comes covered in a 
                signature shrink-wrap grip. Compatible with all Generation 2 Hybrid lengths. 
                It&rsquo;s $49 and easy to buy now - <span>Add To Cart</span>";

$video4text = "VIDEO 4 DESCRIPTION in conditions or target certain fish that do not require 
                the length of hybrid-style spears. &lsquo;Sitting duck&rsquo; fish that spend most their time 
                perched on rocks aimes, divers are faced with less than a few feet of visibility, 
                rendering a lengthy extension useless. 
                We have developed a front end replacement for ANY SIZE spear that removes 
                the extra len three feet. This 12&quot; section comes covered in a 
                signature shrink-wrap grip. Compatible with all Generation 2 Hybrid lengths. 
                It&rsquo;s $49 and easy to buy now - <span>Add To Cart</span>";

$video5text = "VIDEO 5 DESCRIPTION in conditions or target certain fish that do not require 
                the length of hybrid-style spears. &lsquo;Sitting duck&rsquo; fish that spend most their time 
                perched onre faced with less than a few feet of visibility, 
                rendering a lengthy extension useless. 
                We have developed a front end replacement for ANY SIZE spear that removes 
                the extra length when you don&rsquo;t need it! Within seconds, change out your front 
                end tonow - <span>Add To Cart</span>";

$video6text = "VIDEO 6 DESCRIPTION in conditions or target certain fish that do not require 
                the length of hybrid-style spears. &lsquo;Sitting duck&rsquo; fish that spend most their time 
                perched on rocks are more approachable with less extension in front of the l
                oaded hand. Other times, divers are faced with less than a few feet of visibility, 
                rendering a lengthy extension useless. 
                We have developedhis 12&quot; section comes covered in a 
                signature shrink-wrap grip. Compatible with all Generation 2 Hybrid lengths. 
                It&rsquo;s $49 and easy to buy now - <span>Add To Cart</span>";



;?>















