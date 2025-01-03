<?php

declare(strict_types=1);

namespace patterns\structural\decorator\simple;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(BookingDecorator::class)]
#[CoversClass(BasicTraining::class)]
#[CoversClass(FitnessCourse::class)]
#[CoversClass(Sauna::class)]
class BookingDecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicTraining(): void
    {
        $booking = new BasicTraining();

        $this->assertSame(20, $booking->calculateTotalPrice());
        $this->assertSame('Basic training', $booking->getProduct());
    }


    public function testCanCalculatePriceForTrainingAndCourse(): void
    {
        $booking = new BasicTraining();
        $course = new FitnessCourse($booking);

        $this->assertSame(27, $course->calculateTotalPrice());
        $this->assertSame('Basic training incl. fitness course', $course->getProduct());
    }


    public function testCanCalculatePriceForTrainingWithSauna(): void
    {
        $booking = new BasicTraining();
        $sauna = new Sauna($booking);

        $this->assertSame(23, $sauna->calculateTotalPrice());
        $this->assertSame('Basic training and sauna', $sauna->getProduct());
    }


    public function testCanCalculatePriceForTrainingWithAllInclusive(): void
    {
        $booking = new BasicTraining();
        $course = new FitnessCourse($booking);
        $sauna = new Sauna($course);

        $this->assertSame(30, $sauna->calculateTotalPrice());
        $this->assertSame('Basic training incl. fitness course and sauna', $sauna->getProduct());
    }
}
