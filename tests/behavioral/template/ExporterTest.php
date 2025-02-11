<?php

declare(strict_types=1);

namespace patterns\behavioral\template;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(CsvDataExporter::class)]
#[CoversClass(JsonDataExporter::class)]
class ExporterTest extends TestCase
{
    private array $data;

    private string $date;


    protected function setUp(): void
    {
        $this->date = '2002-22-02';

        $this->data = [
            ['Name' => 'Max', 'Alter' => 30],
            ['Name' => 'Julia', 'Alter' => 25],
        ];
    }


    public function testCanExportCsvFiles(): void
    {
        $csvExporter = new CsvDataExporter($this->date);

        $csv = $csvExporter->export($this->data);

        $expected = '
Max,30
Julia,25';
        $this->assertSame($expected, $csv);
        $this->expectOutputString(
            'initializing export:2002-22-02' . PHP_EOL
            . 'done export:2002-22-02' . PHP_EOL
        );
    }


    public function testCanExportJsonFiles(): void
    {
        $jsonDataExporter = new JsonDataExporter($this->date);
        $data = [
            ['Name' => 'Max', 'Alter' => 30],
            ['Name' => 'Julia', 'Alter' => 25],
        ];
        $csv = $jsonDataExporter->export($data);

        $expected = '[
    {
        "Name": "Max",
        "Alter": 30
    },
    {
        "Name": "Julia",
        "Alter": 25
    }
]';
        $this->assertSame($expected, $csv);
        $this->expectOutputString(
            'json data exporter initialized' . PHP_EOL
            . 'done export:2002-22-02' . PHP_EOL
            . 'for json' . PHP_EOL
        );
    }
}
