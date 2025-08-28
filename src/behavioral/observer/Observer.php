<?php

declare(strict_types=1);

namespace patterns\behavioral\observer;

interface Observer {
    public function update(float $temperature): void;
}
