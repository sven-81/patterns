<?php

declare(strict_types=1);

namespace patterns\structural\adapter\simple;

class XmlReport
{
    public function display(): void
    {
        print 'I am XML report';
    }
}
