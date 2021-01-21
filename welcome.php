<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="10;url=loading.php?redirect_url=presentation.php" />
	<title>portfolio</title>
	<link href="style2.css" rel="stylesheet">
</head>
<body>
	<div class="line-1 anim-typewriter">
	<p>"Great , nice to have u here <?php echo $_SESSION['firstname'] ?></p>
</div>
	<div class="line-1 anim-typewriter2">
	<?php	
  echo "let me accompagny u and show u this place !";
  ?>  
</div>
</body>
</html>