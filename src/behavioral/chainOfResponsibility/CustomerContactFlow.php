<?php

declare(strict_types=1);

namespace patterns\behavioral\chainOfResponsibility;

abstract class CustomerContactFlow
{
    private CustomerContactFlow $next;


    public function linkWith(CustomerContactFlow $next): CustomerContactFlow
    {
        $this->next = $next;

        return $next;
    }


    public function check(string $subject, int $customerId): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->check($subject, $customerId);
    }
}
