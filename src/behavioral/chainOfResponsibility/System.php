<?php

declare(strict_types=1);

namespace patterns\behavioral\chainOfResponsibility;

class System
{
    private CustomerContactFlow $customerContactFlow;


    public function setServiceFlow(CustomerContactFlow $customerContactFlow): void
    {
        $this->customerContactFlow = $customerContactFlow;
    }


    public function handleCustomerRequest(string $subject, int $customerId): bool
    {
        if ($this->customerContactFlow->check($subject, $customerId)) {
            echo 'we could help you' . PHP_EOL;

            return true;
        }

        return false;
    }


    public function hasSubject(string $subject): bool
    {
        if ($this->subjectIsOrder($subject) || $this->subjectIsTechnical($subject)) {
            return true;
        }

        return false;
    }


    public function subjectIsTechnical(string $subject): bool
    {
        if ($subject === 'technical') {
            return true;
        }

        return false;
    }


    public function subjectIsOrder(string $subject): bool
    {
        if ($subject === 'order') {
            return true;
        }

        return false;
    }


    public function isCustomer(int $customerId): bool
    {
        if ($customerId === 1234) {
            return true;
        }

        return false;
    }
}
