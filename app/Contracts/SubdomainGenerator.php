<?php

namespace App\Contracts;

use React\Promise\PromiseInterface;

interface SubdomainGenerator
{
    public function generateSubdomain(array $queryParams): PromiseInterface;
}
