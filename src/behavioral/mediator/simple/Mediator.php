<?php

declare(strict_types=1);

namespace patterns\behavioral\mediator\simple;

interface Mediator
{
    public function sendMessage(string $message, User $user): void;


    public function addUser(User $user): void;
}
