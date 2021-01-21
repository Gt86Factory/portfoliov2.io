<?php 

session_start();

$_SESSION['firstname'] = $_POST['firstname'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="4;url=welcome.php" />
	<title>portfolio</title>
	<link href="style.css" rel="stylesheet">
  <style type="text/css">

    table {display:none;}

  </style>
</head>
<body>
	<div class="cont">
  <div class="paper"></div>
  <button><div class='loader'>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    </div>Loading</button>
    <div class="garbage2">
  		<img src="image2.PNG">
  	</div>
  <div class="g-cont">
  	<div class=garbage>
  		<img src="image.PNG">
  	</div>
</div>
</body>
</html>