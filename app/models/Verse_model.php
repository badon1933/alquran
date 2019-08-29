<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;

class Verse_model
{
    public function getVerse($chapter_id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://staging.quran.com:3000/api/v3/chapters/' . $chapter_id . '/verses?language=en&text_type=words');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
