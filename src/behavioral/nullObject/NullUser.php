<?php

declare(strict_types=1);

namespace patterns\behavioral\nullObject;

class NullUser implements User
{
    public function getName(): string
    {
        return 'Gast';
    }


    public function getMail(): string
    {
        return 'gast@example.com';
    }
}