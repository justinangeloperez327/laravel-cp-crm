<?php

namespace App\Services\Xero\Contracts;

interface XeroServiceInterface
{
    public function getInvoices(): array;

    public function createInvoice(array $data);
}
