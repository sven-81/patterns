<?php

declare(strict_types=1);

namespace patterns\behavioral\state;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ClosedState::class)]
#[CoversClass(OpenState::class)]
#[CoversClass(ProgressState::class)]
#[CoversClass(Ticket::class)]
class TicketTest extends TestCase
{
    public function testTickets(): void
    {
        $ticket = new Ticket();
        $this->getState($ticket);

        $ticket->prev();
        $this->getState($ticket);

        $ticket->next();
        $this->getState($ticket);

        $ticket->next();
        $this->getState($ticket);

        $ticket->next();
        $this->getState($ticket);

        $ticket->prev();
        $this->getState($ticket);

        $ticket->prev();
        $this->getState($ticket);

        $this->expectOutputString(
            <<<'OUT'
current state: open

Cannot revert ticket, because it is already open
current state: open

ticket in progress
current state: in progress

ticket closed
current state: closed

ticket is already closed
current state: closed

ticket reverted to in progress
current state: in progress

ticket reverted to open
current state: open


OUT
        );
    }


    private function getState(Ticket $ticket): void
    {
        echo 'current state: ' . $ticket->asString() . PHP_EOL . PHP_EOL;
    }
}
