<?php

declare(strict_types=1);

namespace patterns\behavioral\state;

class OpenState implements TicketState
{
    public function next(Ticket $ticket): void
    {
        echo 'ticket in progress' . PHP_EOL;
        $ticket->setState(new ProgressState());
    }


    public function prev(Ticket $ticket): void
    {
        echo 'Cannot revert ticket, because it is already open' . PHP_EOL;
    }


    public function asString(): string
    {
        return 'open';
    }
}
