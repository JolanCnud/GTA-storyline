<?php
	require '../required/header.php';

	if ($_SESSION['prev'] != 'index'){
		header("Location: ../index.php");
    		exit();
	}

	$_SESSION['choice0'] = 'yacht';
?>
	
	<style>
		body{
  			background-image: url(../images/AquariusYacht-GTAO-front.png);
  			background-repeat: no-repeat;
  			background-attachment: fixed;
		}
	</style>
	
        <h1>You're Carl, an American thief who's very rich and you're about to wake up on your yacht </h1>
        <video width= 30%  src="../videos/TheBeginning.mp4" autoplay controls >
        </video>
        
       
        <ul>
        
        <li> Take a boat   <a  href="boat.php" onclick="<?php $_SESSION['prev'] = 'beg'; ?>"><img  style= "width: 415px; padding-left: 10px" src=../images/boat.png></a></li>
        <li>Take a chopper<a  href="chopper.php" onclick="<?php $_SESSION['prev'] = 'beg'; ?>"><img src=../images/78-785740_helicopter-clipart-by-dg-ra-silhouette-helicopter-clip.png></a></li>
        
    </ul>

<?php
	require '../required/footer.php';
?>
