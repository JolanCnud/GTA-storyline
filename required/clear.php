<?php

    for ($x = 0; true; $x++) {
      if (isset($_SESSION["choice{$x}"])){
		    $_SESSION["choice{$x}"] = null;
      } else {
		    break;
	    }	
    }

?>
