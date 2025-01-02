<?php

declare(strict_types=1);

namespace patterns\structural\adapter\simple;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(JsonReportConverter::class)]
#[CoversClass(JsonReport::class)]
#[CoversClass(XmlReport::class)]
class JsonReportConverterTest extends TestCase
{
    public function testAdapterCanWork(): void
    {
        $report = new JsonReport();
        $converter = new JsonReportConverter($report);
        $converter->display();

        $this->expectOutputString(
            'I am the adapter for json reports to convert into xml reports: ' . PHP_EOL
            . 'I am a special json report with my own special logic'
        );
    }
}
