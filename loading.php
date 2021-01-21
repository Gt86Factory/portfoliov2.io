<?php

$redirect_url = "sophie.php";
if(isset($_GET["redirect_url"])) {
  $redirect_url = $_GET["redirect_url"];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="4;url=<?php echo $redirect_url ?>" />
	<title>portfolio</title>
	<link href="style.css" rel="stylesheet">
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
  		<img src="./image2.PNG">
  	</div>
  <div class="g-cont">
  	<div class=garbage>
  		<img src="./image.PNG">
  	</div>
</div>
</body>
</html>