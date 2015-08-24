<?php
    /*
	send params via post method
    */
    
    if ( isset ($_POST["url"]) ) $url = $_POST["url"];

    if( $curl = curl_init() ) {
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "app_id=31");
      $out = curl_exec($curl);
      echo $out;
      curl_close($curl);
    }


?>