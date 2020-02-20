<?php
	if (!isset($_POST['start-link'])){
		header("Location: ../index.php");
    		exit();
	}

	require '../required/header.php';
?>
	
	<style>
		body{
  			background-image: url(../images/AquariusYacht-GTAO-front.png);
  			background-repeat: no-repeat;
  			background-attachment: fixed;
		}
	</style>
	
        <h1>You're Carl, an American thief who's very rich and you're about to wake up on your yacht </h1>
        <video width= 30%  src="../videos/openingmp4.mp4" autoplay controls >
        </video>
        
       
        <ul>
        
        <li> Take a boat   <a  href="boat.php"><img  style= "width: 415px; padding-left: 10px" src=../images/boat.png></a></li>
        <li>Take a chopper<a  href="chopper.php"><img src=../images/78-785740_helicopter-clipart-by-dg-ra-silhouette-helicopter-clip.png></a></li>
        
    </ul>

<?php
	require '../required/footer.php';
?>
