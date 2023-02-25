<?php

namespace App\Server\SubdomainGenerator;

use App\Contracts\SubdomainGenerator;
use Illuminate\Support\Str;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

class RandomSubdomainGenerator implements SubdomainGenerator
{
    public function generateSubdomain(array $queryParams): PromiseInterface
    {
        return resolve(strtolower(Str::random(10)));
    }
}
