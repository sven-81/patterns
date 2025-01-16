<?php

declare(strict_types=1);

namespace patterns\behavioral\state;

class Ticket
{
    private TicketState $state;


    public function __construct()
    {
        $this->state = new OpenState();
    }


    public function setState(TicketState $state): void
    {
        $this->state = $state;
    }


    public function next(): void
    {
        $this->state->next($this);
    }


    public function prev(): void
    {
        $this->state->prev($this);
    }


    public function asString(): string
    {
        return $this->state->asString();
    }
}
