<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php 
	
	var_dump($_POST);
	echo $_POST['$selectState'];
	error_reporting(E_ALL); ini_set('display_errors', 1);
	#$state = $_POST['search-box-state'];
		
	?>
</body>
</html>