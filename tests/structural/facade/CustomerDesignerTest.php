<?php

declare(strict_types=1);

namespace patterns\structural\facade;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversClass(CustomerDesigner::class)]
class CustomerDesignerTest extends TestCase
{
    private MockObject|DesignLibrary $designLibraryMock;

    private Fonts|MockObject $fontsMock;


    protected function setUp(): void
    {
        $this->designLibraryMock = $this->createMock(DesignLibrary::class);
        $this->fontsMock = $this->createMock(Fonts::class);
    }


    public function testCanDrawHouse(): void
    {
        $this->designLibraryMock->expects($this->once())
            ->method('drawRectangle');
        $this->designLibraryMock->expects($this->once())
            ->method('drawTriangle');
        $this->designLibraryMock->expects($this->once())
            ->method('drawCircle');

        $this->designLibraryMock->expects($this->exactly(3))
            ->method('drawLine');

        $customerDesigner = new CustomerDesigner($this->designLibraryMock, $this->fontsMock);
        $customerDesigner->drawHouse();
    }


    public function testCanDesignHeadline(): void
    {
        $this->designLibraryMock->expects($this->once())
            ->method('drawRectangle');
        $this->designLibraryMock->expects($this->once())
            ->method('createShadow');
        $this->fontsMock->expects($this->once())
            ->method('getBold');
        $this->fontsMock->expects($this->once())
            ->method('write')
            ->with('lalala')
            ->willReturn('lalala');

        $customerDesigner = new CustomerDesigner($this->designLibraryMock, $this->fontsMock);
        $customerDesigner->designHeadline('lalala');
    }
}
