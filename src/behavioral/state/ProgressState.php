<?php

declare(strict_types=1);

namespace patterns\behavioral\state;

class ProgressState implements TicketState
{
    public function next(Ticket $ticket): void
    {
        echo 'ticket closed' . PHP_EOL;
        $ticket->setState(new ClosedState());
    }


    public function prev(Ticket $ticket): void
    {
        echo 'ticket reverted to open' . PHP_EOL;
        $ticket->setState(new OpenState());
    }


    public function asString(): string
    {
        return 'in progress';
    }
}
