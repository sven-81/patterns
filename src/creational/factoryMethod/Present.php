<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

interface Present
{
    public function addRecipientsAge(): string;


    public function about(): string;
}