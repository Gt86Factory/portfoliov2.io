<?php 

session_start();

if (!isset($_SESSION['firstname'])) {
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="contactme.css">
	<title>contact me</title>
</head>
<body>
	<div id="result"></div>
	<img class="contactme" src="https://i1.wp.com/peppermintmoondesign.co.uk/wp-content/uploads/2015/10/contact-me-16.png?ssl=1">
	<form id="msg" action="contactme2.php" method="POST">
			  <input type="text" name="firstname" class="question" id="firstname" value="<?php echo $_SESSION['firstname'] ?>" required autocomplete="off" />
			  <label for="firstname"><span>First Name:</span></label>
			  <input type="text" name="lastname" class="question" id="lastname" required autocomplete="off" />
			  <label for="lastname"><span>Last Name:</span></label>
			  <input type="text" email="email" name="mail" class="question" id="mail" required autocomplete="off" />
			  <label for="email"><span>Email:</span></label>
			  <textarea type="text" comment="comment" name="comment" class="question" id="comment" rows="2" required autocomplete="off" ></textarea> 
			  <label for="comment"><span>Comment:</span></label>
			  <input id="submit" type="button" value="submit" />
			</form>
	<img src="https://www.hubler.fr/39/noir-mat.jpg">
	
</div>

  <?php 

  include 'navbar.php';

  ?>

<script type="text/javascript" src="send.js"></script>
</body>
</html>