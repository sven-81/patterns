<?php

declare(strict_types=1);

namespace patterns\behavioral\template;

abstract class DataExporter
{
    public function __construct(protected readonly string $date)
    {
    }


    public function export(array $data): string
    {
        $this->initializeExport();
        $formattedData = $this->formatData($data);
        $this->finalizeExport();

        return $formattedData;
    }


    protected function initializeExport(): void
    {
        echo 'initializing export:' . $this->date . PHP_EOL;
    }


    abstract protected function formatData(array $data): string;


    protected function finalizeExport(): void
    {
        echo 'done export:' . $this->date . PHP_EOL;
    }
}
