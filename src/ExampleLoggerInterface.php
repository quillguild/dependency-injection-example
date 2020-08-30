<?php

declare(strict_types=1);

namespace DependencyInjectionExample;

interface ExampleLoggerInterface
{
    public function info(string $message);
}
