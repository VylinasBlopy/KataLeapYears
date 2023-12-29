<?php

namespace App\Tests\Unit;

use App\Service\LeapYearsService;
use Generator;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \App\Service\LeapYearsService
 */
class LeapYearsServiceTest extends TestCase
{
    /**
     * @test
     * @dataProvider yearProvider
     * @covers ::isLeapYear
     */
    public function isLeapYear(int $year, bool $expected): void
    {
        $this->assertSame($expected, LeapYearsService::isLeapYear($year));
    }

    public static function yearProvider(): Generator
    {
        yield [1600, true];
        yield [2000, true];
        yield [1700, false];
        yield [1800, false];
        yield [1900, false];
        yield [1999, false];
        yield [2004, true];
        yield [2008, true];
        yield [2012, true];
        yield [2016, true];
        yield [2017, false];
        yield [2018, false];
        yield [2019, false];
        yield [2100, false];
    }
}