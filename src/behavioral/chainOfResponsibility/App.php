<?php

declare(strict_types=1);

namespace patterns\behavioral\chainOfResponsibility;

class App
{
    public function initApp(string $subject, int $customerId): void
    {
        $system = new System();
        $chatBot = new ChatBot($system);
        $hotline = new Hotline($system);
        $technical = new TechnicalSupport($system);

        $flow = $chatBot;
        $flow->linkWith($hotline)
            ->linkWith($technical);

        $system->setServiceFlow($flow);

        $system->handleCustomerRequest($subject, $customerId);
    }
}
