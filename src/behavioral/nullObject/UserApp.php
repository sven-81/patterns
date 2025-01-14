<?php

declare(strict_types=1);

namespace patterns\behavioral\nullObject;

class UserApp
{
    public function run(int $valid = 1): void
    {
        $user = $this->validateSomething($valid);

        $userProfile1 = new UserProfile($user);
        $userProfile1->displayProfile();
    }


    private function validateSomething(int $valid): NullUser|RealUser
    {
        if ($valid !== 0) {
            return new RealUser('gordon shumway', 'alf@example.com');
        }

        return new NullUser();
    }
}
