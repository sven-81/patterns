<?php

declare(strict_types=1);

namespace patterns\behavioral\state;

interface TicketState
{
    public function next(Ticket $ticket): void;


    public function prev(Ticket $ticket): void;


    public function asString(): string;
}
