<?php

declare(strict_types=1);

namespace patterns\behavioral\template;

class CsvDataExporter extends DataExporter
{
    protected function formatData(array $data): string
    {
        $csv = '';
        foreach ($data as $row) {
            $csv .= PHP_EOL . implode(',', $row);
        }

        return $csv;
    }
}
