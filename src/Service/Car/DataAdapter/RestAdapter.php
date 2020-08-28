<?php

namespace App\Service\Car\DataAdapter;

class RestAdapter implements DataAdapterInterface
{
    private const API_URL = 'http://danhoss.vdl.pl/get-velocity.php?t=';

    public function getVelocityData(int $second): int
    {
        $url = self::API_URL . $second;
        $client = \Symfony\Component\HttpClient\HttpClient::create();
        $response = $client->request('GET', $url);
        return (int)round($response->getContent());
    }
}