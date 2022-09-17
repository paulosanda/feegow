<?php

namespace App\Http\Actions;

use GuzzleHttp\Client;

class GetProfessionals
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
        $this->uri = 'https://api.feegow.com/v1/api/professional/list';
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
     * @param  mixed $data
     * @return array
     */
    public function execute($data): array
    {
        $query = '?especialidade_id=' . $data;

        $client = new Client();
        $professionals = $client->request('GET', $this->uri . $query, $this->headers);
        $data = json_decode($professionals->getBody(), true);

        return $data['content'];
    }
}
