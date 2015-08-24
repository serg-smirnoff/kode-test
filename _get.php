<?php
    /*
        send params via get method
    */
    
    if ( isset ($_GET["url"]) ) $url = $_GET["url"];

    if( $curl = curl_init() ) {
      curl_setopt($curl, CURLOPT_URL, $url.'?app_id=52');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
      $out = curl_exec($curl);
      echo $out;
      curl_close($curl);
    }

?>
