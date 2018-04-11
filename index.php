<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ENDTIME</title>
	
	<!-- Core CSS -->
    <link href="style.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">	
</head>
<body>
<h3>THE WORLD MIGHT END BY...</h3>


<?php 
 $page = $_SERVER['PHP_SELF'];
 $sec = "1";
 header("Refresh: $sec; url=$page");?>
<h1><?php date_default_timezone_set("Africa/Lagos");
echo date("G:i:s A"); 
?> TODAY</h1>




</body>