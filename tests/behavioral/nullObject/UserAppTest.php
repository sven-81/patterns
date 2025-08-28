<?php

declare(strict_types=1);

namespace patterns\behavioral\nullObject;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(NullUser::class)]
#[CoversClass(RealUser::class)]
#[CoversClass(UserApp::class)]
#[CoversClass(UserProfile::class)]
class UserAppTest extends TestCase
{
    public function testCanUseUserApp(): void
    {
        $userApp = new UserApp();
        $userApp->run();
        $userApp->run(0);

        $this->expectOutputString(
            <<<'OUT'
Name: gordon shumway
Mail: alf@example.com
Name: Gast
Mail: gast@example.com

OUT
        );
    }
}
