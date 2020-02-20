<?php
	require '../required/header.php';

	if ($_SESSION['prev'] != 'beg'){
		header("Location: ../index.php");
    		exit();
	}
	
	$_SESSION['choice1'] = 'boat';

?>

	<style>
		body{
			background-image: url(../images/Gta-background.jpg);
			background-repeat: no-repeat;
  			background-attachment: fixed;
		}
	</style>

        <h1>You've decided to go by boat </h1>
        <video width= 30%  src="../videos/Boat.mp4" autoplay controls >
        </video>
        
       
        <ul>
        
        <li> Go to the sea  <a  href="sea.php" onclick="<?php $_SESSION['prev'] = 'boat'; ?>"><img  style= "width: 450px; padding-left: 10px" src=../images/PacificOcean-GTAV.jpg></a></li>
        <li>Get on the land<a  href="land.php" onclick="<?php $_SESSION['prev'] = 'boat'; ?>"><img style= "width: 450px;" src=../images/LandActDam-GTAV-East.png></a></li>
        
    </ul>
        
<?php
	require '../required/footer.php';
?>
