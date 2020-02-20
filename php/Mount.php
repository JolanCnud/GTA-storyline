<?php
	require '../required/header.php';
?>
		
	<style>
		body{
  			background-image: url(../images/Mount%20chaliad.png);
  			background-repeat: no-repeat;
  			background-attachment: fixed;
		}
	</style>
		
        <h1>You've decided to go to Mount Chaliad</h1>
        <video width= 30%  src="../videos/.mp4" autoplay controls >
        </video>
        
       
        <ul>
        
        <li>Go lounging<a  href="Lounge.php" onclick="<?php $_SESSION['prev'] = 'mount'; ?>"><img  style= "width: 415px; padding-left: 10px" src=../images/Lounge.png></a></li>
        <li>Get on your desktop<a  href="Desktop.php" onclick="<?php $_SESSION['prev'] = 'mount'; ?>"><img style= "width: 280px;" src=../images/desktop.webp></a></li> 
        
    </ul>

<?php
	require '../required/footer.php';
?>
