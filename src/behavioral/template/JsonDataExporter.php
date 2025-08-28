<?php

declare(strict_types=1);

namespace patterns\behavioral\template;

class JsonDataExporter extends DataExporter
{
    protected function formatData(array $data): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }


    protected function initializeExport(): void
    {
        echo 'json data exporter initialized' . PHP_EOL;
    }


    protected function finalizeExport(): void
    {
        parent::finalizeExport();
        echo 'for json' . PHP_EOL;
    }
}
