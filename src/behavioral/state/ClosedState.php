<?php

declare(strict_types=1);

namespace patterns\behavioral\state;

class ClosedState implements TicketState
{
    public function next(Ticket $ticket): void
    {
        echo 'ticket is already closed' . PHP_EOL;
    }


    public function prev(Ticket $ticket): void
    {
        echo 'ticket reverted to in progress' . PHP_EOL;
        $ticket->setState(new ProgressState());
    }


    public function asString(): string
    {
        return 'closed';
    }
}
