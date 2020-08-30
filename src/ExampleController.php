<?php

declare(strict_types=1);

namespace DependencyInjectionExample;

final class ExampleController
{
    const LOOPS = 10000000;

    /**
     * @var ExampleService
     */
    private ExampleService $service;

    public function __construct(ExampleService $service)
    {
        $this->service = $service;
    }
}
