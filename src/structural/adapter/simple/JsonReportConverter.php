<?php

declare(strict_types=1);

namespace patterns\structural\adapter\simple;

class JsonReportConverter extends XmlReport
{
    public function __construct(private readonly JsonReport $report)
    {
    }


    public function display(): void
    {
        print 'I am the adapter for json reports to convert into xml reports: ' . PHP_EOL
            . $this->report->create();
    }
}
