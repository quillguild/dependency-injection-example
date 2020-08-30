<?php

declare(strict_types=1);

namespace DependencyInjectionExample;

final class ExampleDatabaseController
{
    /**
     * @var ExampleDatabase
     */
    private ExampleDatabase $database;

    public function __construct(ExampleDatabase $database)
    {
        $this->database = $database;
    }
}
