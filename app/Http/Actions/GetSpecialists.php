<?php

namespace App\Http\Actions;

use GuzzleHttp\Client;

class GetSpecialists
{
    private $uri;
    private $headers;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->uri = 'https://api.feegow.com/v1/api/specialties/list';
        $this->headers = array(
            'headers' => [
                'Content-Type' => 'application/json',
                'x-access-token' => env('FEEGOW_TOKEN')
            ]
        );
    }

    /**
     * execute
     *
     * @return array
     */
    public function execute(): array
    {
        $client = new Client();
        $specialists = $client->request('GET', $this->uri, $this->headers);
        $data = json_decode($specialists->getBody(), true);

        return $data;
    }
}
