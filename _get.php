<?php
    /*
        send params via get method
    */

    if (http_response_code() == '200'){
    
        if ( isset ($_GET["url"]) ) $url = $_GET["url"];

        $result_params_url = "?";
    
        $i = 0;
 
        foreach ($_GET as $k => $v){
            if (($k != 'method') && ($k != 'url')){
                $result_params_url .= $v;
                
                /*
                 * generate params url for curl
                 */
                
                if ($i % 2 == 0) $result_params_url .= "=";
                if ($i % 2 != 0) $result_params_url .= "&";
                
                $i++;
                
            }
        }

        if( $curl = curl_init() ) {

          curl_setopt($curl, CURLOPT_URL, $url.$result_params_url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
          $out = curl_exec($curl);
          echo "Responce: <br />".$out;
          curl_close($curl);

        }
        
        echo "<br /><br />Formated (array) values of responce: <br />";        
        $out_array = json_decode($out, true);       
        print_r ($out_array);
        
        echo "<br /><br />Requested values (k => v) in responce: <br />";
        
        foreach ($_GET as $k => $v){
            if (($k != 'method') && ($k != 'url')){
                if ($v != '')
                    if (strpos($out, $v) !== false ) echo $v.' - ok '; else echo $v.' - no ';
            }
        }
        
        
    } else 
        echo "http_pesponse_code: ".http_response_code();

?>
