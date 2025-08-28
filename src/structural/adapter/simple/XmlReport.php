<?php

declare(strict_types=1);

namespace patterns\structural\adapter\simple;

class XmlReport
{
    public function display(): void
    {
        echo 'I am XML report';
    }
}
