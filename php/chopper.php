<?php
	require '../required/header.php';

	if ($_SESSION['prev'] != 'beg'){
		header("Location: ../index.php");
    		exit();
	}
	
	$_SESSION['choice1'] = 'chopper';

?>
   
	<style>
		body{
  			background-image: url(../images/AquariusYacht-GTAO-front.png);
  			background-repeat: no-repeat;
  			background-attachment: fixed;
		}
	</style>

        <h1>You've decided to go by chopper </h1>
        <video width= 30%  src="../videos/Gettinginthechopper.mp4" autoplay controls >
        </video>
        
       
        <ul>
        
        <li> Go to mount Chaliad <a  href="Mount.php" onclick="<?php $_SESSION['prev'] = 'chopper'; ?>"><img  style= "width: 415px; padding-left: 10px" src=../images/Mount.jpg></a></li>
        <li>Go to the Maze Bank's roof<a  href="Maze.php" onclick="<?php $_SESSION['prev'] = 'chopper'; ?>"><img style= "width: 280px;" src=../images/gta-maze-bank-tower-aerial.jpg></a></li>
        
    </ul>
        
<?php
	require '../required/footer.php';
?>
