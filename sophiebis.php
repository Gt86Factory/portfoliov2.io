<?php 

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>portfolio</title>
	<link href="style2bis.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<p class="line-1 anim-typewriter">Hello, im Sophie your personal guide on this</p> 
	<p class="line-1 anim-typewriter2">portfolio but i don't know who i'm actually</p>
	<p class="line-1 anim-typewriter3">talking can u tell me your name ?</p> 
			<form action="loading2bis.php" method="POST">
			  <input type="text" name="firstname" class="question" id="firstname" required autocomplete="off" />
			  <label for="firstname"><span> Firstname :  <i class="fa fa-smile-o" aria-hidden="true"></i></span></label>
			  <input id="submit" type="submit" value="Submit!" />
			</form>	
	<a id="skip" href="loading2bis.php">Skip</a>
</body>
</html>