<?php

declare(strict_types=1);

namespace patterns\structural\facade;

interface DesignLibrary
{
    public function drawLine(): void;


    public function drawTriangle(): void;


    public function drawRectangle(): void;


    public function drawCircle(): void;


    public function createShadow(): void;
}
