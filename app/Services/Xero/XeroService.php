<?php

namespace App\Services\Xero;

use App\Services\Xero\Contracts\XeroServiceInterface;
use App\Services\Xero\Exceptions\XeroException;

class XeroService implements XeroServiceInterface
{
    public function __construct(
        protected readonly XeroClient $client
    ) {}

    public function getInvoices(): array
    {
        $response = $this->client->get('/invoices');

        if ($response->failed()) {
            throw new XeroException('Failed to fetch invoices: '.$response->body());
        }

        return $response->json();
    }

    public function createInvoice(array $data)
    {
        $response = $this->client->post('/invoices', $data);

        if ($response->failed()) {
            throw new XeroException('Failed to create invoice: '.$response->body());
        }

        return $response->json();
    }
}
