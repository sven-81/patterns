<?php

declare(strict_types=1);

namespace patterns\structural\adapter;

interface Driveable
{
    public function drive(): void;


    public function stop(): void;
}
