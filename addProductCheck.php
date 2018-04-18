<?php

	if(isset ($_POST["prodName"])) {
		$prodName = $_POST["prodName"];
		$categories = $_POST["categories"];
		$stock = $_POST["stock"];
		$price = $_POST["price"];

		//test
		$prodName = (string)$prodName;
		$categories = (int)$categories;
		$stock = (int)$stock;
		$price = (float)$price;

		$db = mysqli_connect('localhost', 'root', '', 'pharmacy');

		if (!$db) {
			die();
		}

		$sql = "INSERT INTO item (item_name, item_category_id, item_stock, item_price) VALUES (\"$prodName\", $categories, $stock, $price)";
		if ($db->query($sql) === TRUE) {
			
		} else {
			echo "error: ". $sql . $db->error;
		}
		//mysqli_query($db, $sql);
		mysqli_close($db);
		//Prevents statement from rerunning if page refreshes
		//header("location: index.php");
	}
?>