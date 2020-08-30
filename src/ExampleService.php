<?php

declare(strict_types=1);

namespace DependencyInjectionExample;

final class ExampleService
{
    /**
     * @var ExampleRepository
     */
    private ExampleRepository $repository;

    public function __construct(ExampleRepository $repository)
    {
        $this->repository = $repository;
    }
}
