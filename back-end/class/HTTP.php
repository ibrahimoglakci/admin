<?php

class HTTP
{
    private static $instance = null;
    private $url;
    private $method;
    private $data = [];
    private $json = false;

    private function __construct()
    {
    }

    public static function fetch($url)
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        self::$instance->url = $url;
        return self::$instance;
    }

    public function get()
    {
        $this->method = 'GET';
        return $this;
    }

    public function post()
    {
        $this->method = 'POST';
        return $this;
    }

    public function put()
    {
        $this->method = 'PUT';
        return $this;
    }

    public function delete()
    {
        $this->method = 'DELETE';
        return $this;
    }

    public function data($data)
    {
        if (!is_array($data)) {
            die("Invalid data format: " . gettype($data));
        }
        $this->data = $data;
        return $this;
    }

    public function json()
    {
        $this->json = true;
        return json_decode($this->execute(), false);
    }


    private function execute()
    {
        $ch = curl_init();

        if (!filter_var($this->url, FILTER_VALIDATE_URL)) {
            die("Invalid URL: " . $this->url);
        }

        if (!in_array($this->method, ['GET', 'POST', 'PUT', 'DELETE'])) {
            die("Invalid method: " . $this->method);
        }

        if ($this->method == 'GET') {
            if (!empty($this->data) && is_array($this->data)) {
                $this->url .= '?' . http_build_query(array_map('urlencode', $this->data));
            }
        } else {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->method);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json; charset=utf-8',
            ));

            if (!empty($this->data) && is_array($this->data)) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->data, JSON_UNESCAPED_UNICODE));
            }
        }

        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

        $response = curl_exec($ch);

        if ($response === false) {
            die(curl_error($ch));
        }

        curl_close($ch);

        if ($this->json) {
            return $response;
        }

        $jsonResponse = json_decode($response, true);

        if (is_null($jsonResponse) || json_last_error() != JSON_ERROR_NONE) {
            die("Invalid JSON response");
        }

        return $jsonResponse;
    }
}

/**
 * Exampe Usage 
 * 
 * $request = HTTP::fetch("http://localhost:8000/api/v1/products")->get()->json();
 *   foreach ($request as $item) {
 *       echo $item->name . " - " . $item->description . "<br>";
 *   }

 */
