<?php

declare(strict_types=1);

namespace patterns\behavioral\chainOfResponsibility;

class Hotline extends CustomerContactFlow
{
    public function __construct(private readonly System $system)
    {
    }


    public function check(string $subject, int $customerId): bool
    {
        if ($this->system->isCustomer($customerId)) {
            echo 'Hello customer' . PHP_EOL;

            return $this->isSubjectOrderCheck($subject, $customerId);
        }
        echo 'Sorry, Support for customers only' . PHP_EOL;

        return false;
    }


    private function isSubjectOrderCheck(string $subject, int $customerId): bool
    {
        if ($this->system->subjectIsOrder($subject)) {
            echo 'Glad to help you with your order' . PHP_EOL;

            return true;
        }

        return parent::check($subject, $customerId);
    }
}
