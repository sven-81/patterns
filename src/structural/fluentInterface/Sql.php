<?php

declare(strict_types=1);

namespace patterns\structural\fluentInterface;

class Sql
{
    public function __construct(
        private array $fields = [],
        private array $from = [],
        private array $where = [],
        private array $order = [],
        private int $limit = 1000,
        private int $offset = 0
    ) {
    }


    public function select(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }


    public function from(string $table, string $alias): self
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }


    public function where(string $condition): self
    {
        $this->where[] = $condition;

        return $this;
    }


    public function order(string $condition): self
    {
        $this->order[] = $condition;

        return $this;
    }


    public function limit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }


    public function offset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }


    public function asString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s ORDER BY %s LIMIT %s OFFSET %s;',
            implode(', ', $this->fields),
            implode(', ', $this->from),
            implode(' AND ', $this->where),
            implode(', ', $this->order),
            $this->limit,
            $this->offset
        );
    }
}
