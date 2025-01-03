<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

class DatabaseConnection
{
    public function __construct(private readonly DatabaseConfiguration $configuration)
    {
        //Example for constructor injection
    }


    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
