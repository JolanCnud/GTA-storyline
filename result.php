<?php
	require 'required/header.php';
?>

  <?php
    echo "<h1>Timeline:</h1>";
    for ($x = 0; isset($_SESSION["choice{$x}"]); $x++) {
	echo "<br>";
	echo '<li>'.$_SESSION["choice{$x}"].'</li>';	
    }
  ?>

<?php
	require 'required/footer.php';
?>
