<?php

declare(strict_types=1);

namespace patterns\behavioral\observer;

class WeatherStation implements Subject
{
    private array $observers = [];

    private float $temperature;


    public function setTemperature(float $temperature): void
    {
        $this->temperature = $temperature;
        $this->notifyObservers();
    }


    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }


    public function removeObserver(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, static fn($obs) => $obs !== $observer);
    }


    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature);
        }
    }
}
