<?php
	require_once('config.php');
	// function registrate($con) {
		
	// }

	
	function getProducts($con, $category = "all") {
		// $currentProductId = intval($_GET['productId']);
		// $currentProductId = 1;
		if ($category == "all")
			$sql = "SELECT * FROM products";
		else
			$sql = "SELECT * FROM products WHERE category = '$category'";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	// $sql = "SELECT * FROM products WHERE id = $currentProductId";
?>