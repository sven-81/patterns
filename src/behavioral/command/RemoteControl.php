<?php

declare(strict_types=1);

namespace patterns\behavioral\command;

//Invoker
class RemoteControl
{
    private Command $command;


    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }


    public function pushButton(): void
    {
        $this->command->execute();
    }
}
