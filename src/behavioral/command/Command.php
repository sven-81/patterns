<?php

declare(strict_types=1);

namespace patterns\behavioral\command;

interface Command
{
    public function execute(): void;
}
