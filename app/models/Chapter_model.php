<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;

class Chapter_model
{
    public function getChapter()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://staging.quran.com:3000/api/v3/chapters');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
