<?php
require(TEMPLATES_FOLDER.'Header.php');

if(isset($_GET['category']) && $_GET['category'] == 1) {
	echo "<h1>Gitarrer</h1>";
} else if(isset($_GET['category']) && $_GET['category'] == 2){
	echo "<h1>Fender</h1>";
} else if(isset($_GET['category']) && $_GET['category'] == 3){
	echo "<h1>Bass</h1>";
} else if(isset($_GET['category']) && $_GET['category'] == 4){
	echo "<h1>Ibanez</h1>";
} else{
	echo "<h1>Våra Produkter</h1>";
}
?>

<?php
$prods = new ProductsController;
$products = $prods->Products();

foreach($products as $product) {
	require('templates/parts/product_list_item.tpl.php');
}
require(TEMPLATES_FOLDER.'Footer.php');
?>