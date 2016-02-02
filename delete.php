<?php

require("config/config.php");
require("model/delete_model.php");

if ($_GET['id'] != null AND is_numeric($_GET['id'])) {
	
	if (!empty($_POST)) {
		if ($_POST['prompt'] == "ja") {
			delete($conn, $_GET['id']);
		}
		header("Location: index.php");
		
	}

	$omschrijving = read($conn, $_GET['id']);

	require("view/header.php");
	require("view/delete.php");
	require("view/footer.php");

} else {
	header("Location: index.php");
}

