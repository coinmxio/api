<?php
class coinmx {
	public function __construct($apikey) {
		define('coinmxendpoint', 'https://coinmx.io/api/v2/');
		define('coinmxapikey', $apikey);
	}

    public function mix($fee, $coin, $mix) {
        $curl = curl_init(coinmxendpoint . 'mix');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
		'Authorization-Bearer: '.coinmxapikey.''
		]);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(
            [
                'fee' => $fee,
                'coin' => $coin,
                'mix' => $mix
            ]
        ));
        $responseString = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($responseString, true);
        return $response;
    }
	
    public function newaddress($wid) {
        $curl = curl_init(coinmxendpoint . 'newaddress');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
		'Authorization-Bearer: '.coinmxapikey.''
		]);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(
            [
                'wid' => $wid
            ]
        ));
        $responseString = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($responseString, true);
        return $response;
    }
	
    public function getconfirms($wid) {
        $curl = curl_init(coinmxendpoint . 'newaddress');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
		'Authorization-Bearer: '.coinmxapikey.''
		]);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(
            [
                'wid' => $wid
            ]
        ));
        $responseString = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($responseString, true);
        return $response;
    }

    public function getlog($wid,$sitename) {
        $curl = curl_init(coinmxendpoint . 'getlog');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
		'Authorization-Bearer: '.coinmxapikey.''
		]);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(
            [
                'wid' => $wid,
				'sitename' => $sitename
            ]
        ));
        $responseString = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($responseString, true);
        return $response;
    }
}
?>