<?php

namespace App\Services;

use GuzzleHttp\Client;

class MatrixApiService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('GOOGLE_MATRIX_API_KEY');
    }

    public function fetchData($params)
    {
        $response = $this->client->get('https://maps.googleapis.com/maps/api/distancematrix/json', [
            'query' => array_merge($params, [
                'key' => $this->apiKey,
                'origins' => $params['origin'],
                'destinations' => $params['destination'],
                'mode' => 'driving'
            ]),
        ]);

        // Use dd() to dump the response
        $data = json_decode($response->getBody()->getContents(), true);

        // Dump the response and stop execution
        // dd($data);
    }
}
