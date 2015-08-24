<?php
    /*
	send params via post method
    */
    
    if (http_response_code() == '200'){
        
        if ( isset ($_POST["url"]) ) $url = $_POST["url"];
       
        $result_params_url = "";

        foreach ($_POST as $k => $v){
            if (($k != 'method') && ($k != 'url')){
                $result_params_url .= $k."=".$v."&";
            }
        }

        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $result_params_url);
            $out = curl_exec($curl);
            echo $out;
            curl_close($curl);
        }
    } else 
        echo "http_pesponse_code: ";http_response_code();

?>