<?php

class API {


    public static function fetch($method, $url, $data = array()) {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            die("Unknown URL: " . $url);
        }

        if (!in_array($method, ['GET', 'POST', 'PUT', 'DELETE'])) {
            die("Unknown Method: " . $method);
        }

        $ch = curl_init();
        
        if($method == 'GET') {
            if(!empty($data) && is_array($data)) {
                $url .= '?' . http_build_query(array_map('urlencode', $data));
            }
        } else {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
            ));

            if(!empty($data) && is_array($data)) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array_map('urlencode', $data)));
            }
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

        $response = curl_exec($ch);

        if($response === false) {
            die(curl_error($ch));
        }

        curl_close($ch);

        $jsonResponse = json_decode($response, true);

        if (is_null($jsonResponse) || json_last_error() != JSON_ERROR_NONE) {
            die("Unknown JSON Response");
        }

        return $jsonResponse;
    }
}

?>
