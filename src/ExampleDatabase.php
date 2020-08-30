<?php

declare(strict_types=1);

namespace DependencyInjectionExample;

final class ExampleDatabase
{
    private string $hostname;

    public function __construct(string $hostname)
    {
        $this->hostname = $hostname;
    }
}
