<?php

declare(strict_types=1);

namespace patterns\behavioral\chainOfResponsibility;


class ChatBot extends CustomerContactFlow
{
    public function __construct(private readonly System $system)
    {
    }



    public function check(string $subject, int $customerId): bool
    {
        if (!$this->system->hasSubject($subject)) {
            echo 'Subject is unknown' . PHP_EOL;

            return false;
        }

        return parent::check($subject, $customerId);
    }
}
