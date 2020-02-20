<?php
	require 'required/header.php';
	
	for ($x = 0; true; $x++) {
		if (isset($_SESSION["choice{$x}"])){
			$_SESSION["choice{$x}"] = null;
		} else {
		    break;
		}	
	}
?>

        <link rel="stylesheet" type="text/css" href="css/style.css">

        <h1> Welcome to "GTA Online: The Criminal Adventure". This is a story set in the world of GTA Online. You're Choices can change the whole story and the end to it. So Choose wisely !!!
        Click on the Start button te begin.</h1>
        <a href="php/The_beginning.php" onclick="<?php $_SESSION['prev'] = 'index'; ?>"><img src="images/start.jpeg"></a>

<?php
	require 'required/footer.php';
?>
