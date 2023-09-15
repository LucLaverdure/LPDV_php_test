<?php

	// init session
	session_start();

	// randomize seed
	srand();

	// set main path for files fetching
	define("PATH", $_SERVER["DOCUMENT_ROOT"]."/"); // Must include trailing slash

	// Includes
	require_once PATH."core/tools/core-tools.php";

	// Configs
	require_once PATH."core/setup/core-load-configs.php";
	$setup = new \MeshMVC\Config();

	// routes (f=*, !q=*)
	require_once PATH."core/route/route.php";
	
	// MVC
	require_once PATH."core/db/core-db.php";
	require_once PATH."core/mvc/core-model.php";
	require_once PATH."core/mvc/core-models.php";
	require_once PATH."core/mvc/core-view.php";
	require_once PATH."core/mvc/core-controller.php";
	require_once PATH."core/mvc/core-shortcuts.php";

	// Execution queue start
	require_once PATH."core/queue/core-queue.php";
?>
