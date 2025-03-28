<?php

namespace App\Services\Xero\Contracts;

interface XeroClientInterface
{
    public function get(string $endpoint, array $query = []);

    public function post(string $endpoint, array $data = []);
}
