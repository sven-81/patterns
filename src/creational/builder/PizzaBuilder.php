<?php

declare(strict_types=1);

namespace patterns\creational\builder;

class PizzaBuilder
{
    public function __construct(
        private string $size = '',
        private string $cheese = '',
        private string $mainTopping = '',
        private string $sideTopping = '',
        private string $sauce = ''
    ) {
    }


    public function addSize(string $size): static
    {
        $this->size = $size;

        return $this;
    }


    public function addCheese(string $cheese): static
    {
        $this->cheese = $cheese;

        return $this;
    }


    public function addMainTopping(string $mainTopping): static
    {
        $this->mainTopping = $mainTopping;

        return $this;
    }


    public function addSideTopping(string $sideTopping): static
    {
        $this->sideTopping = $sideTopping;

        return $this;
    }


    public function addSauce(string $sauce): static
    {
        $this->sauce = $sauce;

        return $this;
    }


    public function build(): Pizza
    {
        return new Pizza(
            $this->size,
            $this->cheese,
            $this->mainTopping,
            $this->sideTopping,
            $this->sauce
        );
    }
}
