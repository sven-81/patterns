<?php

declare(strict_types=1);

namespace patterns\behavioral\chainOfResponsibility;

class TechnicalSupport extends CustomerContactFlow
{
    public function __construct(private readonly System $system)
    {
    }


    public function check(string $subject, int $customerId): bool
    {
        if ($this->system->subjectIsTechnical($subject)) {
            echo 'Turn it off and on again' . PHP_EOL;

            return true;
        }

        return parent::check($subject, $customerId);
    }
}
