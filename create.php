<?php

require("config/config.php");
require("model/create_model.php");

if (!empty($_POST)) {
	create($conn, $_POST);
}

header("Location: index.php");