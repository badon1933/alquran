<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;

class Verse_model
{
    public function getVerse($chapter_id, $page = 1)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://staging.quran.com:3000/api/v3/chapters/' . $chapter_id . '/verses?translations=33&language=id&text_type=words&page=' . $page);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
