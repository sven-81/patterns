<?php

declare(strict_types=1);

namespace patterns\structural\adapter;

interface Loadable
{
    public function loadCargo(float $weight): void;


    public function unloadCargo(): void;
}
