<?php

declare(strict_types=1);

namespace DependencyInjectionExample;

final class ExampleController
{
    /**
     * @var ExampleService
     */
    private ExampleService $service;

    public function __construct(ExampleService $service)
    {
        $this->service = $service;
    }
}
