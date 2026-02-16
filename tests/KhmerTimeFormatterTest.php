<?php

namespace KhmerTimeFormat\Tests;

use KhmerTimeFormat\KhmerTimeFormatter;
use PHPUnit\Framework\TestCase;

final class KhmerTimeFormatterTest extends TestCase
{
    public function testDigits12hPm(): void
    {
        $this->assertSame("ម៉ោង១ និង ២២ នាទី រសៀល", KhmerTimeFormatter::format("1:22 PM", "digits"));
    }

    public function testWords12hPm(): void
    {
        $this->assertSame("ម៉ោងមួយ និង ម្ភៃពីរ នាទី រសៀល", KhmerTimeFormatter::format("1:22 PM", "words"));
    }

    public function testDigits24h(): void
    {
        $this->assertSame("ម៉ោង១ និង ២២ នាទី រសៀល", KhmerTimeFormatter::format("13:22", "digits"));
    }

    public function testWords24h(): void
    {
        $this->assertSame("ម៉ោងមួយ និង ម្ភៃពីរ នាទី រសៀល", KhmerTimeFormatter::format("13:22", "words"));
    }
}
