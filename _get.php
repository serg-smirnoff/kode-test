<?php
    /*
        get
    */
    
    if( $curl = curl_init() ) {
      curl_setopt($curl, CURLOPT_URL, 'http://digitaled.ru/freeapi/public/api/?app_id=52');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
      $out = curl_exec($curl);
      echo $out;
      curl_close($curl);
    }

?>
