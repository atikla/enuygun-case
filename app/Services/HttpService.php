<?php 

namespace App\Services;

use  App\Bridges\ProviderBridges;
use GuzzleHttp\Client;


class HttpService extends Client
{
    public function getDataFromApi(array $provider)
    {
        return $this->getResponseAsArray($this->get($provider['url'])->getBody(), $provider);
    }

    private function getResponseAsArray($response, $param)
    {
        return (new ProviderBridges(json_decode( (string) $response, true), $param))->insertAndGetData();
    }
}