<?php

	if (isset ($_POST["saleID"])) {
		$id = $_POST["saleID"];
		$quantity = $_POST["quantity"];

		$db = mysqli_connect('localhost', 'root', '', 'pharmacy');

		if (!$db) {
			die();
		}

		$sql = "UPDATE item SET item_stock = item_stock - $quantity WHERE item_id = $id";
		mysqli_query($db, $sql);
		mysqli_close($db);
		//Prevents statement from rerunning if page refreshes
		header("location: index.php");
	}

?>