<?php

namespace App\Services\Xero;

use App\Services\Xero\Contracts\XeroClientInterface;
use Illuminate\Support\Facades\Http;

class XeroClient implements XeroClientInterface
{
    protected string $baseUrl;

    protected string $accessToken;

    public function __construct(string $baseUrl, string $accessToken)
    {
        $this->baseUrl = $baseUrl;
        $this->accessToken = $accessToken;
    }

    public function get(string $endpoint, array $query = [])
    {
        return Http::withToken($this->accessToken)
            ->get($this->baseUrl.$endpoint, $query);
    }

    public function post(string $endpoint, array $data = [])
    {
        return Http::withToken($this->accessToken)
            ->post($this->baseUrl.$endpoint, $data);
    }
}
