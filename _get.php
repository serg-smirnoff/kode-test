<?php
    /*
        send params via get method
    */
    
//    print_r ($_GET); die();
    
    if (http_response_code() == '200'){
    
        if ( isset ($_GET["url"]) ) $url = $_GET["url"];

        $result_params_url = "?";

        foreach ($_GET as $k => $v){
            if (($k != 'method') && ($k != 'url')){
                $result_params_url .= $k."=".$v."&";
            }
        }

        if( $curl = curl_init() ) {

          curl_setopt($curl, CURLOPT_URL, $url.$result_params_url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
          $out = curl_exec($curl);
          echo $out;
          curl_close($curl);

        }
        
    } else 
        echo "http_pesponse_code: ";http_response_code();

?>
