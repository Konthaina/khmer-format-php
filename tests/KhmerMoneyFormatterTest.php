<?php

namespace KhmerTimeFormat\Tests;

use KhmerTimeFormat\KhmerMoneyFormatter;
use PHPUnit\Framework\TestCase;

final class KhmerMoneyFormatterTest extends TestCase
{
    public function testFormatKhrDefaultUsesKhmerDigits(): void
    {
        $this->assertSame('១៥,០០០ ៛', KhmerMoneyFormatter::formatKHR(15000));
    }

    public function testFormatKhrCanUseLatinDigits(): void
    {
        $this->assertSame('15,000 ៛', KhmerMoneyFormatter::formatKHR(15000, false));
    }

    public function testFormatUsdWithTwoDecimals(): void
    {
        $this->assertSame('$15,000.00', KhmerMoneyFormatter::formatUSD(15000));
    }

    public function testFormatUsdCanUseKhmerDigits(): void
    {
        $this->assertSame('$១៥,០០០.២៥', KhmerMoneyFormatter::formatUSD(15000.25, true));
    }

    public function testToKhmerWordsKhr(): void
    {
        $this->assertSame('ដប់ប្រាំពាន់ រៀល', KhmerMoneyFormatter::toKhmerWordsKHR(15000));
    }

    public function testFormatRoundsKhrToNoDecimals(): void
    {
        $this->assertSame('១៥,០០១ ៛', KhmerMoneyFormatter::formatKHR(15000.5));
    }

    public function testGenericFormatUsesCurrencyDefaults(): void
    {
        $this->assertSame('១៥,០០០ ៛', KhmerMoneyFormatter::format('KHR', 15000));
        $this->assertSame('$15,000.00', KhmerMoneyFormatter::format('USD', 15000));
    }

    public function testFormatRejectsUnsupportedCurrency(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        KhmerMoneyFormatter::format('EUR', 10);
    }

    public function testFormatRejectsInvalidAmount(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        KhmerMoneyFormatter::formatKHR('abc');
    }
}
