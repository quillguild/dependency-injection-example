<?php

declare(strict_types=1);

namespace DependencyInjectionExample;

final class ExampleLoggerController
{
    /**
     * @var ExampleLoggerInterface
     */
    private ExampleLoggerInterface $logger;

    public function __construct(ExampleLoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
