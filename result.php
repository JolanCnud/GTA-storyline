<?php
	require 'required/header.php';
?>

  <?php
    echo "<h1>Timeline:</h1>";
    for ($x = 0; true; $x++) {
        if (isset($_SESSION["choice{$x}"])){
		echo "<br>";
		echo '<li>'.$_SESSION["choice{$x}"].'</li>';
        } else {
		exit();
	}	
    }
  ?>

<?php
	require 'required/footer.php';
?>
